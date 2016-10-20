<!doctype html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Trackeur</title>
	<link rel="icon" type="image/x-icon" href="/favicon.ico"></link>
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap-theme.min.css') }}
    {{ HTML::style('css/jquery.dataTables.min.css') }}
    {{ HTML::style('css/jquery.dataTables_themeroller.css') }}
    {{ HTML::style('css/dataTables.bootstrap.css') }}
    {{ HTML::style('css/common.css') }}
    
	<style>
		body {
		    padding-top: 60px;
		    padding-bottom: 30px;
		    font-size: 12px;
		}
		.table {
			margin-bottom: 0px;
			font-size: small;
		}
	</style>
</head>
<body style="background-color:#F2F2F2"> <!-- FFF7EE FFF5EF FFFDF3  -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse" style="background-color:#1C1C1C;">
           <ul class="nav navbar-nav navbar-left">	
                <li class="dropdown">
                    <a class="navbar-brand" href="{{route('produit.index')}}"><font color="white">Récupération des données</font></a>
                </li>
            </ul>
            <ul class="nav navbar-nav">	
                <li class="dropdown">
                    <a class="navbar-brand" href="{{route('reference.index')}}"><font color="white">Recherche Type Produit</font></a>
                </li>
            </ul>
        </div>
    </div>
	
	@yield('contenu')
	
    <footer>
        {{ HTML::script('js/jquery-2.1.1.min.js') }}
        {{ HTML::script('js/jquery.dataTables.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/common.js') }}

        @yield('js')	
    </footer>
</body>
</html>