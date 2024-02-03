@extends('frontend.main')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <h3 class="text-themecolor mb-0">System Utilities</h3>
        <ol class="breadcrumb mb-0 p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Backup & Restore</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Backup & Restore MySQL Database') }}</div>

                    <div class="card-body">
                        <form action="{{ route('backup.restore') }}" method="get" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Database') }}</label>

                                <div class="col-md-6">
                                    <input type="file" name="backup" id="backup">
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group mb-0">
                                    <a href="{{ route('backup.backup' ) }}" class="btn btn-primary waves-effect waves-light">backup database</a>
                                    <button type="submit" class="btn btn-info waves-effect waves-light">restore database</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
