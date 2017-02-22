@extends('layouts.app')

@section('tabs')
    @include('partials.tabs', compact('tabs'))
@endsection

@section('content')
    <div class="content">
        <div class="container mt-30 mb-30 tab-content">
            @include('internal.bpo.application.info.company', compact('project'))
            @include('internal.bpo.application.info.project', compact('project'))
            @if($project->inspection)
                @include('internal.bpo.project.info.report', compact('project'))
            @endif
            @include('internal.bpo.project.info.results', compact('project'))
            @include('internal.bpo.project.info.kkr', compact('kkr'))
            @include('internal.bpo.project.info.documents', compact('document', 'project'))

        </div>
    </div>
@endsection