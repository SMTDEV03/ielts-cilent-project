@extends('layouts.front-layout')
@section('title','Self Correction')

@section('content')

<!-- Mobile Menu Start -->
<x-mobile_menu />
<!-- Mobile Menu End -->

<!-- Page Banner Start -->
<x-page_banner path="Writing">
    <h2 class="title">Self Correction <span>Essay</span></h2>
</x-page_banner>
<!-- Page Banner End -->

<div class="section section-padding pt-10">
    <div class="container">
        <div class="row gx-10">
            <div class="col-lg-8">
                <!-- Correction Form Start -->
                <x-correction_form />
                <!-- Correction Form End -->
            </div>
            <div class="col-lg-4">
                <!-- Sidebar Start -->
                <x-sidebar :data="$samples"/>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
</div>

<!-- Subscribe Start -->
<x-subscribe />
<!-- Subscribe End -->

@endsection

@section('extra-js')
<script src="https://cdn.prowritingaid.com/beyondgrammar/2.0.2893/dist/hayt/bundle.js"></script>
<script>
    $(document).ready(function() {
        $('#correct').click(function() {
            const settings = {
                service: {
                    apiKey: "E8FEF7AE-3F36-4EAF-A451-456D05E6F2A3",
                    serviceUrl: 'https://rtg.prowritingaid.com'
                },
                grammar: {
                    languageFilter: null,
                    languageIsoCode: null,
                    checkStyle: true,
                    checkSpelling: true,
                    checkGrammar: true,
                    checkerIsEnabled: true
                }
            };
            const GrammarChecker = window["BeyondGrammar"]["GrammarChecker"];
            const $textarea = document.querySelector('textarea');
            const checker = new GrammarChecker($textarea, settings.service, settings.grammar);

            checker.init()
                .then(() => checker.activate())
        });
    });
</script>
@endsection

@section('extra-css')
<style>
    .wrapper {
        position: fixed;
        top: 10px;
        left: 10px;
        right: 10px;
        bottom: 10px;
    }

    textarea {
        width: 100%;
        height: 75%;
    }
</style>
@endsection