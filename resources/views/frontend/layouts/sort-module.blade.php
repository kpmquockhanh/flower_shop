<form class="woocommerce-ordering" method="get">
    <div id="sort-by">
        <label class="left">Sắp xếp theo: </label>
        <select name="orderby" class="orderby">
            <option value="" selected="selected">Mặc định</option>
            <option value="date">Mới nhất</option>
            <option value="price">Giá tăng dần</option>
            <option value="price-desc">Giá giảm dần</option>
        </select>
    </div>
</form>
@section('ext-script')
    <script>
        jQuery('#sort-by select').change(function (e) {
            let form = jQuery(this).parents('form.woocommerce-ordering');
            let params = getUrlParameter();

            Object.entries(params).forEach(entry => {
                const [key, value] = entry;
                let input = jQuery("<input>").attr("type", "hidden").attr("name", key).val(value);
                form.append(jQuery(input));
            });

            form.submit();
        });

        let getUrlParameter = function getUrlParameter() {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;
            let params = {};
            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');
                if (sParameterName[0]) {
                    params[sParameterName[0]] = sParameterName[1] ?? null;
                }
            }

            return params;
        };
    </script>
@endsection
