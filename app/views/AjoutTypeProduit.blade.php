@extends('template')

@section('contenu')

<!-- Formulaire de nouvelle saisie -->
<div class='col-xs-12 col-sm-9 col-ms-offset-1 col-md-9 col-lg-6 col-lg-offset-2'>
    @if(Session::has('ok'))
            <div class="alert alert-success">{{ Session::get('ok') }}</div>
    @else
        @if(Session::has('ko'))
            <div class="alert alert-danger">{{ Session::get('ko') }}</div>
        @else
            <div class="alert alert-material-indigo-100"></div>
        @endif
    @endif
    <div class='panel-heading'>
        <div class='form-horizontal' >
            <h5 class='panel-title'><strong>Ajout du type produit pour le produit : {{ $produit->idProduit }}</strong></h5>
        </div>
    </div>
    <div class="panel panel-info">
        {{ Form::open(array('url' => 'produit/' . $produit->idProduit, 'method' => "put")) }}

        <table class='table table-bordered table-condensed'>
            <tr bgcolor="#FFFFFF ">
                <td>
                    <div class="form-group {{ $errors->has('typeProduit') ? 'has-error has-feedback' : '' }}">
                        <label class="col-xs-12 col-sm-12 col-md-12 col-lg-12 control-label"></font>Type du produit :</label><br />
                        {{ Form::text('typeProduit', $produit->typeProduit, array('class' => 'form-control input-normal' ,  'placeholder' => 'Insérer le type de produit')) }}
                        <strong class="text-danger">{{ $errors->first('typeProduit') }}</strong>
                    </div>
                </td>
            </tr>

            <tr bgcolor="#EFF5FB"> 
                <td colspan=6>
                    <p align="center"></br>
                        {{ Form::submit('Valider', array('class' => 'btn btn-info pull-center', 'style' => 'cursor:hand;' , 'title'=>'Valider')) }}
                    </p>
                </td>
            </tr>
        </table>
        {{ Form::close() }}
    </div>
</div>	
@stop