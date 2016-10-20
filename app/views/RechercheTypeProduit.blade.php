@extends('template')

@section('contenu')

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
            <h5 class='panel-title'><strong>Rechercher le type produit</strong></h5>
        </div>
    </div>
    <div class="panel panel-info">
        {{ Form::open(array('url' => 'reference', 'method' => "post")) }}

        <table class='table table-bordered table-condensed'>
            <tr bgcolor="#FFFFFF ">
                <td>
                    <div class="form-group {{ $errors->has('valeurScan') ? 'has-error has-feedback' : '' }}">
                        <label class="col-xs-12 col-sm-12 col-md-12 col-lg-12 control-label"></font>Valeur Scan :</label><br />
                        {{ Form::text('valeurScan', null, array('class' => 'form-control input-normal' ,  'placeholder' => 'Insérer la valeur Scan')) }}
                        <strong class="text-danger">{{ $errors->first('valeurScan') }}</strong>
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