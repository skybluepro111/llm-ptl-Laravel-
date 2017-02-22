@extends('layouts.app')

@section('tabs')
    @include('partials.tabs', compact('tabs'))
@endsection

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30 tab-content">
            @include('internal.bpo.application.info.company', compact('project'))
            @include('internal.bpo.application.info.project', compact('project'))
            @include('internal.bpo.project.info.report', compact('project'))
            @include('internal.bpo.project.info.results', compact('project'))
        </div>
    </div>
@endsection