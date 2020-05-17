@extends('layouts.layout')

@section('content')
    <main class="freshman-position">
        <div class="text-center freshman-header">
            <p class="d-inline-block mb-0 f-s-30">大学４年次</p>
            <div class="d-inline-block dialog-popover">
                <i class="fas fa-question-circle icon-color-purple ml-2 i-s-20 popover-help"
                   tabindex="0" role="button" data-toggle="popover" data-trigger="focus"
                   data-container="body" data-placement="bottom" data-html="true"
                   data-content="単位を取得した科目にチェックを付けてください">
                </i>
            </div>
        </div>
        <form action="{{ route('freshman') }}" method="POST">
            <div class="d-flex justify-content-center freshman-content-position">
                <div class="text-center freshman-content">
                    @csrf
                    <div class="field-title">
                        <p class="mb-0 f-s-25">教養教育科目</p>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-a" class="custom-control-input custom-checkbox-point" name="industry_and_law">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-a">産業と法</label>
                    </div>
                </div>
                <div class="text-center freshman-content">
                    <div class="field-title">
                        <p class="mb-0 f-s-25">スキル教育科目</p>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-a" class="custom-control-input custom-checkbox-point" name="academic_english_c">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-a">Academic English C</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-b" class="custom-control-input custom-checkbox-point" name="conversation_c">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-b">Conversation C</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-c" class="custom-control-input custom-checkbox-point" name="academic_english_d">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-c">Academic English D</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-d" class="custom-control-input custom-checkbox-point" name="conversation_d">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-d">Conversation D</label>
                    </div>
                </div>
                <div class="text-center freshman-content">
                    <div class="field-title">
                        <p class="mb-0 f-s-25">専門基礎科目</p>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-a" class="custom-control-input custom-checkbox-point" name="applied_geometry">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-a">応用幾何学</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-b" class="custom-control-input custom-checkbox-point" name="algebra_and_encoding">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-b">代数学と符号化</label>
                    </div>
                </div>
                <div class="text-center freshman-content">
                    <div class="field-title">
                        <p class="mb-0 f-s-25">専門教育科目</p>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-a" class="custom-control-input custom-checkbox-point" name="graduation_thesis">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-a">卒業研究</label>
                    </div>
                </div>
            </div>
            <div class="text-right submit-btn-position">
                <div class="d-inline-block w-100">
                    <button type="submit" id="submit-btn" class="btn btn-secondary py-3 submit-btn">送信</button>
                </div>
            </div>
        </form>
    </main>
@endsection
