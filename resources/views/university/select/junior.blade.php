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
        <form action="{{ route('freshman') }}" method="POST">
            <div class="d-flex justify-content-center freshman-content-position">
                <div class="text-center freshman-content">
                    @csrf
                    <div class="field-title">
                        <p class="mb-0 f-s-25">教養教育科目</p>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-a" class="custom-control-input custom-checkbox-point" name="philosophy">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-a">哲学</label>
                    </div>
                </div>
                <div class="text-center freshman-content">
                    <div class="field-title">
                        <p class="mb-0 f-s-25">スキル教育科目</p>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-a" class="custom-control-input custom-checkbox-point" name="academic_english_a">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-a">Academic English A</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-b" class="custom-control-input custom-checkbox-point" name="conversation_a">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-b">Conversation A</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-c" class="custom-control-input custom-checkbox-point" name="french_one">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-c">フランス語Ⅰ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-d" class="custom-control-input custom-checkbox-point" name="german_one">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-d">ドイツ語Ⅰ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-e" class="custom-control-input custom-checkbox-point" name="work_experience">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-e">就業実習</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-f" class="custom-control-input custom-checkbox-point" name="academic_english_b">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-f">Academic English B</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-g" class="custom-control-input custom-checkbox-point" name="conversation_b">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-g">Conversation B</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-h" class="custom-control-input custom-checkbox-point" name="french_two">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-h">フランス語Ⅱ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-i" class="custom-control-input custom-checkbox-point" name="german_two">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-i">ドイツ語Ⅱ</label>
                    </div>
                </div>
                <div class="text-center freshman-content">
                    <div class="field-title">
                        <p class="mb-0 f-s-25">専門基礎科目</p>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-a" class="custom-control-input custom-checkbox-point" name="geometry_and_multimedia">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-a">幾何学とマルチメディア</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-b" class="custom-control-input custom-checkbox-point" name="complex_function_theory">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-b">複素関数論</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-c" class="custom-control-input custom-checkbox-point" name="algebra_and_cryptography">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-c">代数学と暗号</label>
                    </div>
                </div>
                <div class="text-center freshman-content">
                    <div class="field-title">
                        <p class="mb-0 f-s-25">専門教育科目</p>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-a" class="custom-control-input custom-checkbox-point" name="special_lecture_on_information_technology">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-a">情報工学特別講義</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-b" class="custom-control-input custom-checkbox-point" name="information_theory">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-b">情報理論</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-c" class="custom-control-input custom-checkbox-point" name="network_programming">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-c">ネットワークプログラミング</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-d" class="custom-control-input custom-checkbox-point" name="software_engineering_one">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-d">ソフトウェア工学Ⅰ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-e" class="custom-control-input custom-checkbox-point" name="information_engineering_experiment_three">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-e">情報工学実験Ⅲ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-f" class="custom-control-input custom-checkbox-point" name="digital_system_design">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-f">ディジタルシステム設計</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-g" class="custom-control-input custom-checkbox-point" name="human_computer_interaction">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-g">ヒューマンコンピュータ・インタラクション</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-h" class="custom-control-input custom-checkbox-point" name="pattern_recognition">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-h">パターン認識</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-i" class="custom-control-input custom-checkbox-point" name="image_processing">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-i">画像情報処理</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-j" class="custom-control-input custom-checkbox-point" name="information_technology_certification_two">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-j">情報技術資格Ⅱ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-k" class="custom-control-input custom-checkbox-point" name="information_technology_ethics">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-k">情報技術者倫理</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-l" class="custom-control-input custom-checkbox-point" name="english_presentation">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-l">英語プレゼンテーション</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-m" class="custom-control-input custom-checkbox-point" name="hci_programming">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-m">HCIプログラミング</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-n" class="custom-control-input custom-checkbox-point" name="software_engineering_two">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-n">ソフトウェア工学Ⅱ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-o" class="custom-control-input custom-checkbox-point" name="information_engineering_experiment_four">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-o">情報工学実験Ⅳ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-p" class="custom-control-input custom-checkbox-point" name="system_lsi">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-p">システムLSI</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-q" class="custom-control-input custom-checkbox-point" name="information_network">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-q">情報ネットワーク</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-r" class="custom-control-input custom-checkbox-point" name="information_security">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-r">情報セキュリティ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-s" class="custom-control-input custom-checkbox-point" name="digital_signal_processing">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-s">ディジタル信号処理</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-t" class="custom-control-input custom-checkbox-point" name="audio_information_processing">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-t">音情報処理</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-u" class="custom-control-input custom-checkbox-point" name="robotics">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-u">ロボティクス</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-v" class="custom-control-input custom-checkbox-point" name="project_based_exercise_two">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-v">プロジェクト型演習Ⅱ</label>
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
