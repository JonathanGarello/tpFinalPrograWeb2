{{>headerAdmin}}
{{>navAdmin}}
<div class="w3-panel">
    <h5>Codigo QR</h5>
    {{#qr}}
    <div class="w3-table w3-striped w3-white">

        <img src="{{qr}}" alt="">

    </div>
    {{/qr}}
</div>
{{>footerAdmin}}