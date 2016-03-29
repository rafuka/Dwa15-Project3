<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    @yield('title', 'Project 3 | Spring 2016')
  </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://bootswatch.com/paper/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>
<body>
  @yield('header')

  @yield('body')

  <footer>
    @yield('footernav')
    <p>Created on Spring 2016 by J.R. Garcia</p>
  </footer>

  @yield('scripts')
</body>
</html>
