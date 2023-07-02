@extends('layouts.default')
@section('content')
    <div data-elementor-type="wp-post" data-elementor-id="174" class="elementor elementor-174">
        @include('widgets.banner')
        @if ($page)
            <section class="elementor-section elementor-top-section elementor-element elementor-element-06153c3 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="06153c3" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35d5e40" data-id="35d5e40" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated e-swiper-container">
                            <div class="elementor-element elementor-element-49524d6 elementor-widget elementor-widget-heading animated fadeIn" data-id="49524d6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-large elementor-align-left">{{ $page->title }}</h3>
                                </div>
                            </div>
                            <p>{{ $page->excerpt }}</p>
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f5f345f" data-id="f5f345f" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <?php echo html_entity_decode($page->content) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    @endif
@endsection
