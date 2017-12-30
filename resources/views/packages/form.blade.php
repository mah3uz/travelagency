<div class="row">

    <div class="col-xs-6 col-sm-12 col-md-6">

        <div class="form-group">

            <strong>Title:</strong>

            {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-6 col-sm-12 col-md-6">

        <div class="form-group">

            <strong>Subtitle:</strong>

            {!! Form::text('subtitle', null, array('placeholder' => 'Sub-Title','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-6 col-sm-12 col-md-6">

        <div class="form-group">

            <strong>Travel Starting From:</strong>

            {!! Form::text('start_from', null, array('placeholder' => 'Starting Point','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-6 col-sm-12 col-md-6">

        <div class="form-group">

            <strong>Destination:</strong>

            {!! Form::text('destination', null, array('placeholder' => 'Destination','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-4 col-sm-12 col-md-4">

        <div class="form-group">

            <strong>Capacity:</strong>

            {!! Form::text('capacity', null, array('placeholder' => 'Capacity','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-4 col-sm-12 col-md-4">

        <div class="input-group date">

            <strong>Start Date:</strong>

            {!! Form::text('start_date', null, array('placeholder' => 'Start Date', 'id' => 'datepicker', 'class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-4 col-sm-12 col-md-4">

        <div class="form-group">

            <strong>Package Price:</strong>

            {!! Form::text('price', null, array('placeholder' => 'Package Price','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Description:</strong>

            {!! Form::textarea('description', null, array('placeholder' => 'Body','class' => 'form-control','style'=>'height:150px')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>