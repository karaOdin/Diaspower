<style type="text/css">
	.js-cookie-consent
	{
		position: absolute;
		bottom: 0;
		position: fixed;
		font-size: 14px;
		padding: 20px;
		text-align: center;
		width: 100%;
		z-index: 9999;
		background-color:  black;
		color:  #fff;
		border-color: black;
		border: solid 1px;
		    font-weight: 700;
		margin: 10 0 10 0px
	}

	 .btn-primary
	{
		background-color:  #ffcc80;
	}

	.cook
	{
		margin: 5px
	}
</style>

<div class="js-cookie-consent cookie-consent">

    <span class="cookie-consent__message">
        {!! trans('cookieConsent::texts.message') !!}
    </span>

    <button class="js-cookie-consent-agree cookie-consent__agree btn btn-danger cook">
        {{ trans('cookieConsent::texts.agree') }}
    </button>

</div>
