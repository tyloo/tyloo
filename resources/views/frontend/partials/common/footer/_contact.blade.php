<div class="col-sm-3 mg25-xs">
    <div class="heading-footer">
        <h4>{{ trans('app.blocks.common.contact.title') }}</h4>
    </div>
    <p>
        <i class="fa fa-home footer-info-icons"></i>
        <small class="address">{{ env('CONTACT_CITY', 'City') }}</small>
    </p>
    <p>
        <i class="fa fa-envelope-o footer-info-icons"></i>
        <small class="address">{{ env('CONTACT_EMAIL', 'Email') }}</small>
    </p>
    <p>
        <i class="fa fa-phone footer-info-icons"></i>
        <small class="address">{{ env('CONTACT_PHONE', 'Phone') }}</small>
    </p>
</div>
