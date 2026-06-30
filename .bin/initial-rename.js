const replace = require('replace-in-file');
const glob = require('glob');
const path = require('path');
const fs = require('fs');
const { promisify } = require('util');
const renameAsync = promisify(fs.rename);

const filePath = path.join(process.cwd(), '**/*.{js,php,json,scss,css,html}');

const files = glob.sync(filePath, {
	ignore: ['**/node_modules/**'],
});

const options = {
	files: files,
	from: [
		/babita-business-theme/g,
		/wp_babita_business_theme  /g,
		/BABITA_BUSINESS_THEME/g,
		/WP-BLOCK-THEME-BOILERPLATE/g,
		/Wp-Block-Theme-Boilerplate/g,
		/Babita_Business_Theme/g,
		/BabitaBusinessTheme/g,
		/WP Block Theme Boilerplate/g,
		/babita-babita-business-theme-/g,
	],
	to: [
		'babita-business-theme',
    	'wp_babita_business_theme',
    	'BABITA_BUSINESS_THEME',
    	'BABITA-BUSINESS-THEME',
   		'Babita-Business-Theme',
    	'Babita_Business_Theme',
    	'BabitaBusinessTheme',
    	'Babita Business Theme',
    	'babita-babita-business-theme',//can use brandname as prefix
	],
	verbose: true,
	dry: false,
};

const renamedResults = [];
async function renamePHPFiles() {
	const renamePromises = files
		.filter((file) => file.endsWith('.php') || file.endsWith('.pot'))
		.filter((file) => /wp-block-theme-boilerplate/.test(file))
		.map(async (file) => {
			const dir = path.dirname(file);
			const baseName = path.basename(file);
			const newBaseName = baseName.replace(
				/wp-block-theme-boilerplate/gi,
				'your-renamed-theme' /******************** replace with your theme details */
			);
			const newFileName = path.join(dir, newBaseName);

			try {
				const baseNameOriginalFile = path.basename(file);
				const baseNameNewFile = path.basename(newFileName);
				if (baseNameOriginalFile !== baseNameNewFile) {
					await renameAsync(file, newFileName);
					renamedResults.push({
						from: file,
						to: newFileName,
					});
				}
			} catch (error) {
				console.error(`Error renaming ${file}:`, error);
			}
		});

	await Promise.all(renamePromises);
}

async function main() {
	try {
		const results = await replace(options);
		console.log('Replacement results:', results);
		await renamePHPFiles();
		console.log('');
		console.log('File renamed results:', renamedResults);
	} catch (error) {
		console.error('Error occurred:', error);
	}
}

main();
