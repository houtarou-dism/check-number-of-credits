@extends('layouts.layout')

@section('content')
    <main class="freshman-position">
        <div class="text-center freshman-header">
            <p class="d-inline-block mb-0 f-s-30">大学３年次</p>
            <div class="d-inline-block dialog-popover">
                <i class="fas fa-question-circle icon-color-purple ml-2 i-s-20 popover-help"
                   tabindex="0" role="button" data-toggle="popover" data-trigger="focus"
                   data-container="body" data-placement="bottom" data-html="true"
                   data-content="単位を取得した科目にチェックを付けてください">
                </i>
            </div>
        </div>
        <form action="{{ route('senior.senior') }}" method="POST">
            @csrf
            @include('university.select.junior')
            <div class="text-right submit-btn-position">
                <div class="d-inline-block w-100">
                    <button type="submit" id="submit-btn" class="btn btn-secondary py-3 submit-btn">４年次へ</button>
                </div>
            </div>
        </form>
    </main>
@endsection
