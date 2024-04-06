<!DOCTYPE html>
<html>
<head>
    <title>Ma Page AngularJS dans Laravel</title>
</head>
<body>
    <div ng-app="">
        <p>Input something in the input box:</p>
        <p>Name : <input type="text" ng-model="email" placeholder="Enter name here"></p>
        <h1>Hello @{{ email }}</h1>
    </div>

    <!-- Inclure AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</body>
</html>
