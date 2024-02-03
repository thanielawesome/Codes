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
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="flex d-flex justify-content-center pb-3" style="text-align: center">
                    <div>
                        <h4 class="card-title">{{ __('Backup MySQL Database') }}</h4>
                    </div>
                </div>
                <a class="btn-sm btn-outline-dark-info"
                   href="{{ route('backup.index') }}">
                    <i class="fas fa-arrow-alt-circle-left"></i>
                    <span> back </span>
                </a>
                <hr>
                <div>
                    @include('backend.system-utility.backup-restore.backup')
                </div>
            </div>
        </div>
    </div>
@endsection
