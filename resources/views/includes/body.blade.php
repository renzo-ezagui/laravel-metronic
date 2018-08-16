<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        @include('includes.aside-left')
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            @include('includes.subheader')

            <div class="m-content">
                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-4">
                        @include('widgets.top-products')
                    </div>
                    <div class="col-xl-4">
                        @include('widgets.activity')
                    </div>
                    <div class="col-xl-4">
                        @include('widgets.blog')
                    </div>
                </div>
                <!--End::Section-->

                <!--Begin::Section-->
                <div class="m-portlet">
                    <div class="m-portlet__body  m-portlet__body--no-padding">
                        <div class="row m-row--no-padding m-row--col-separator-xl">
                            <div class="col-xl-4">
                                @include('widgets.stats2-1')
                            </div>
                            <div class="col-xl-4">
                                @include('widgets.daily-sales')
                            </div>
                            <div class="col-xl-4">
                                @include('widgets.profit-share')
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::Section-->

                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-4">
                        @include('widgets.personal-income')
                    </div>
                    <div class="col-xl-4">
                        @include('widgets.finance-stats')
                    </div>
                    <div class="col-xl-4">
                        @include('widgets.packages')
                    </div>
                </div>
                <!--End::Section-->

                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-6">
                        @include('widgets.tasks')
                    </div>
                    <div class="col-xl-6">
                        @include('widgets.support-tickets');
                    </div>
                </div>
                <!--End::Section-->

                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        @include('portlets.recent-activities');
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        @include('portlets.recent-notifications');
                    </div>
                </div>
                <!--End::Section-->

                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-8">
                        @include('widgets.datatables-widget');
                    </div>
                    <div class="col-xl-4">
                        @include('widgets.audit-log');
                    </div>
                </div>
                <!--End::Section-->

                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-8">
                        @include('widgets.best-sellers');
                    </div>
                    <div class="col-xl-4">
                        @include('widgets.authors-profit');
                    </div>
                </div>
                <!--End::Section-->
            </div>
        </div>
    </div>
    <!-- end:: Body -->

    @include('includes.footer')
</div>
<!-- end:: Page -->
@include('includes.quick-sidebar')
@include('includes.scroll-to-top')
@include('includes.quick-nav')
@include('includes.scripts')
@include('includes.snippets')


</body>
</html>