	var Apps = angular.module('Apps', ['ngRoute']);

	//routes
	Apps.config(function($routeProvider) {
		$routeProvider

			// route for the home page
			.when('/', {
				templateUrl : 'pages/home.html',
				controller  : 'mainController'
			})

			// .when('/home', {
			// 	templateUrl: 'pages/home.html',
			// 	controller: 'mainController'
			// })

			.when('/orders', {
				templateUrl: 'pages/orders.html',
				controller: 'OrdersCtrl'
			})

			.when('/payments', {
				templateUrl: 'pages/payments.html',
				controller: 'PaymentsCtrl'
			})

			.when('/reports', {
				templateUrl: 'pages/reports.html',
				controller: 'ReportsCtrl'
			})

			.when('/settings', {
				templateUrl: 'pages/settings.html',
				controller: 'SettingsCtrl'
			})

			.when('/help', {
				templateUrl: 'pages/help.html',
				controller: 'HelpCtrl'
			})

			// route sub-pages products
			.when('/products', {
				templateUrl: 'sub-pages/products/products.html',
				controller: 'ProductsCtrl'
			})

			.when('/add-products', {
				templateUrl: 'sub-pages/products/add-products.html',
				controller: 'Add-PCtrl'
			})

			.when('/edit-products', {
				templateUrl: 'sub-pages/products/edit-products.html',
				controller: 'Edit-ProductsCtrl'
			})

			// route sub-pages administrator

			.when('/administrator', {
				templateUrl: 'sub-pages/administrator/administrator.html',
				controller: 'AdministratorCtrl'
			})

			.when('/new-administrator', {
				templateUrl: 'sub-pages/administrator/new-administrator.html',
				controller: 'New-AdministratorCtrl'
			})

			.when('/edit-administrator', {
				templateUrl: 'sub-pages/administrator/edit-administrator.html',
				controller: 'Edit-AdministratorCtrl'
			})

	});

	// create the controller and inject Angular's $scope
	Apps.controller('mainController', function($scope) {
		// create a message to display in our view
		$scope.message = 'Everyone come and see how good I look!';
	});