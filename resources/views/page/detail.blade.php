@extends('layouts.default')
@section('content')
    <div data-elementor-type="wp-post" data-elementor-id="174" class="elementor elementor-174">
        @include('widgets.banner')
        <section class="elementor-section elementor-top-section elementor-element elementor-element-184019e elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="184019e" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1519px; left: 0px;margin-top:20px">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d026ca2" data-id="d026ca2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <?php echo html_entity_decode($page->content) ?>
                    </div>
                </div>
            </div>
        </section>
        @include('widgets.form')
        @include('widgets.news')
    </div>
@endsection()
