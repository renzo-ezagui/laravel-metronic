@extends('layouts.app')
@section('page-title','SCRAPPING BOT')

@section('content')
    <!--begin::Portlet-->
    <div class="m-portlet m-portlet--tab col-md-12">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                        Scrapping Codes ???
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right">
            <div class="m-portlet__body">
                <div class="m-form__group form-group">
                    <label>Websites to scrap for:</label>
                    <div class="m-checkbox-list">
                        <label class="m-checkbox m-checkbox--air">
                            <input type="checkbox"> www.fme-cat.com
                            <span></span>
                        </label>
                        <label class="m-checkbox m-checkbox--air">
                            <input type="checkbox"> www.dormanproducts.com
                            <span></span>
                        </label>
                    </div>
                    <span class="m-form__help">Select one website at least</span>
                </div>
                <div class="form-group m-form__group">
                    <label for="exampleTextarea">Example textarea</label>
                    <textarea class="form-control m-input m-input--air" id="exampleTextarea" rows="3"></textarea>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions">
                    <button type="reset" class="btn btn-accent">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Portlet-->
@stop