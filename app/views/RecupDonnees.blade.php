@extends('template')

@section('contenu')

<!-- --------------------------------------------
   Lister Astreintes
 -------------------------------------------- -->

<div class='container-fluid'>
    <div class='row'>
        <div class='col-xs-12 col-sm-10 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1'>
            @if(Session::has('ok'))
                <div class="alert alert-success">{{ Session::get('ok') }}</div>
            @else
                <div class="alert"></div>
            @endif
            <div style="border-color:#D8D8D8" class="panel panel-default">
                <h4 style="padding-left:1em; padding-top:1em;">
                    <strong><span class="fa fa-clock-o fa-fw"></span> Récupération des données </strong>
                </h4><br />
                <div class="table-responsive" style="padding-left:1em; padding-right:1em; padding-bottom:1em;">
                    <table id="tab_produit" class="table table-striped table-bordered table-condensed dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                        <thead>
                            <tr>
                                <td><strong>Date</strong></td>
                                <td><strong>Heure</strong></td>
                                <td><strong>Valeur scan</strong></td>
                                <td><strong>Type de produit</strong></td>
                                <td><strong>Nombre de produit identique</strong></td>
                                <td><i>Ajouter type de produit</i></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produits as $valeur)
                                 @if (isset($valeur['idProduit']))
                                    {{ Form::hidden('idProduit', $valeur['idProduit'],array('id'=>'idProduit', 'name' =>'idProduit', 'class' => 'form-control input-sm')) }}
                                    <tr>
                                        @if (isset($valeur['date']))
                                            <td>{{ date('d/m/Y', strtotime($valeur['date'])) }}</td>
                                        @endif
                                        @if (isset($valeur['heure']))
                                            <td>{{ date('H:i', strtotime($valeur['heure'])) }}</td>
                                        @endif
                                        @if (isset($valeur['valeurScan']))
                                            <td>{{ $valeur['valeurScan'] }} </td>
                                        @else
                                            <td></td>
                                        @endif
                                        @if (isset($valeur['typeProduit']))
                                            <td>{{ $valeur['typeProduit'] }}</td>
                                        @else
                                            <td></td>
                                        @endif
                                        
                                        <td>{{ "a calculer" }}</td>
                                        <td style='width:5px'>  
                                            <a href="{{URL::to('produit/' . $valeur->idProduit.'/edit')}}" class='btn btn-default ' title="Modifier"><i class="glyphicon glyphicon-pencil text-success"></i></a>
                                        </td>
                                    </tr>
                                @endif  
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('js')
    {{ HTML::script('js/produitsDataTable.js') }}
    {{ HTML::script('js/moment.min.js') }}
    {{ HTML::script('js/moment-with-locales.min.js') }}
    {{ HTML::script('js/datetime-moment.js') }}
@stop