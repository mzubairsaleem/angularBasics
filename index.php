<!DOCTYPE html>
<html ng-app="MyApp">
    <head>
        <title>Angular JS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div  ng-controller="HelloController">Hi {{name}}, welcome to AngularJS Tutorial Series</div>
        
        <div ng-controller="AboutController">Brought to you by {{name}}.</div>

        <!-- Angular JS Scripts -->
        <script src="js/angular.min.js"></script>
        <script src="js/angular-route.min.js"></script>
        
        <!-- AngularJS Application Specific Scripts -->
        <script src="app/app.js"></script>
        <script src="app/controllers/homeController.js"></script>
        <script src="app/controllers/aboutController.js"></script>
    </body>
</html>