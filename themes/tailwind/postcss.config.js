module.exports = {
	plugins: [
		require('tailwindcss'),
		require('autoprefixer'),
		require('@fullhuman/postcss-purgecss')({
			content: [
				'./templates/**/*.twig', 
				'./templates/*.twig',
				'/Applications/MAMP/htdocs/grav-admin/user/plugins/simplesearch/templates/**/*.twig',
				'/Applications/MAMP/htdocs/grav-admin/user/plugins/simplesearch/templates/*.twig',
			],
			defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g) || []
		})
	]
}
