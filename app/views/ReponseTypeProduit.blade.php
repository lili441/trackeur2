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
                    <strong><span class="fa fa-clock-o fa-fw"></span> Types de produit correspondant </strong>
                </h4><br />
                <div class="table-responsive" style="padding-left:1em; padding-right:1em; padding-bottom:1em;">
                    <table id="tab_typeproduit" class="table table-striped table-bordered table-condensed dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                        <thead>
                            <tr>
                                <td><strong>Types de produit</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($references as $valeur)
                                @if (isset($valeur['idReference']))
                                    {{ Form::hidden('idReference', $valeur['idReference'],array('id'=>'idReference', 'name' =>'idReference', 'class' => 'form-control input-sm')) }}
                                    <tr>
                                        @if (isset($valeur['typeProduit']))
                                            <td>{{ $valeur['typeProduit'] }}</td>
                                        @else
                                            <td>Aucun type correspondant</td>
                                        @endif
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
    {{ HTML::script('js/typeproduitDataTable.js') }}
@stop