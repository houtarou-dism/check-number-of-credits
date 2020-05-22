@extends('layouts.layout')

@section('content')
    <div class="modal fade result-dialog" id="confirmationScreen" tabindex="-1" role="dialog" aria-labelledby="confirmationScreenTitle" aria-hidden="true" style="display: none;">
        @include('university.result.dialog.freshman-result-dialog')
    </div>
    <main class="d-flex justify-content-center result-main-position">
        <div class="result-content-position">
            <div class="content-header">
                <div class="d-flex justify-content-center">
                    <div class="text-center judgment-promotion-status-success">
                        <div class="d-inline-block">
                            <p class="mb-0 f-s-30">進級可能</p>
                        </div>
                        <div class="d-inline-block">
                            <a id="confirmation-freshman-submit-button" class="d-inline-block text-center" role="button" data-toggle="modal" href="#confirmationScreen">
                                <i class="fas fa-question-circle icon-color-purple i-s-18 popover-help-result"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="point-text">
                    <p class="mb-0">{{ $totalCredits }} 単位</p>
                </div>
            </div>
            <div class="content-center">
                <div class="pl-3 required-subject-header">
                    <div class="d-inline-block">
                        <p class="mb-0 f-s-25">必修落単</p>
                    </div>
                    <div class="d-inline-block">
                        <i class="fas fa-question-circle icon-color-purple i-s-15 popover-help-result-required"
                           tabindex="0" role="button" data-toggle="popover" data-trigger="focus"
                           data-container="body" data-placement="bottom" data-html="true"
                           data-content="必修落単とは、取得できていない必修科目のことです。">
                        </i>
                    </div>
                </div>
                <div class="d-flex justify-content-center required-subject-center">
                    <div class="required-subject-content text-left">
                        @foreach($notCompulsorySubjects['freshman'] as $notCompulsorySubject)
                            <p class="mb-0">{{ $notCompulsorySubject }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
