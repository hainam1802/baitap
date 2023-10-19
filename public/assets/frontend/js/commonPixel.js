var getCookie = function(e) {
        return document.cookie.length > 0 && -1 != (c_start = document.cookie.indexOf(e + "=")) ? (c_start = c_start + e.length + 1, -1 == (c_end = document.cookie.indexOf(";", c_start)) && (c_end = document.cookie.length), unescape(document.cookie.substring(c_start, c_end))) : ""
    },
    LocalStorageManager = {
        setValue: function(e, t) {
            window.localStorage.setItem(e, JSON.stringify(t))
        },
        getValue: function(e) {
            try {
                if (null == e) return;
                var t = window.localStorage.getItem(e);
                if (void 0 != t && null != t && "" != t) return JSON.parse(t);
                return
            } catch (n) {
                return
            }
        }
    };

function doViewContentPixel(e, t, n, d, o, i, r, a, l, u, c) {
    var h = "" != document.getElementById("hdhdhdhhdhdhdhdhdhd").value ? "user" : "kmudivivu";
    if ("true" == uatMode && "kmudivivu" == h) {
        e = parseFloat(e);
        var v = LocalStorageManager.getValue("datakey"),
            s = null != v ? v.FilterRooms.RoomsRequest[0].Adults.value : 2,
            y = null != v ? v.FilterRooms.RoomsRequest[0].Child.value : 0,
            m = Static.convertDate(getCookie("di")),
            g = Static.convertDate(getCookie("do")),
            k = document.getElementById("countryAddress") ? document.getElementById("countryAddress").value : "",
            p = document.getElementById("cityAddress") ? document.getElementById("cityAddress").value : "",
            C = document.getElementById("regionAddress") ? document.getElementById("regionAddress").value : "";
        getCookie("roomNumber");
        var I = {
            value: e,
            currency: "VND",
            content_type: "hotel",
            content_category: n,
            checkin_date: m,
            checkout_date: g,
            content_ids: t,
            city: p,
            region: C,
            country: k,
            num_adults: s,
            num_children: y
        };
        (e == NaN || 0 == e || void 0 == e || null == e || "" == e) && (I = {
            content_type: "hotel",
            content_category: n,
            checkin_date: m,
            checkout_date: g,
            content_ids: t,
            city: p,
            region: C,
            country: k,
            num_adults: s,
            num_children: y
        }), fbq("trackSingle", "1505476653113156", "ViewContent", I);
        var A = {
            content_type: "product",
            content_id: t,
            quantity: 1,
            price: e,
            value: e,
            currency: "VND"
        };
        ttq.track("ViewContent", A), gtag("event", "page_view", {
            send_to: "AW-952773342",
            hrental_id: t,
            hrental_pagetype: "offerdetail",
            hrental_totalvalue: "" + e
        })
    }
}

function doViewContentGa(e, t, n) {
    var d = "" != document.getElementById("hdhdhdhhdhdhdhdhdhd").value ? "user" : "kmudivivu";
    if ("true" == uatMode && "kmudivivu" == d) {
        var o = Static.convertDate(getCookie("di")),
            i = Static.convertDate(getCookie("do"));
        document.getElementById("regionAddress") && document.getElementById("regionAddress").value;
        var r = $("#regionName").val(),
            a = readCookie("HOTLINE"),
            l = "Hồ Ch\xed Minh City";
        null != a && void 0 != a && "" != a && (l = JSON.parse(a).yourCity ?? "Hồ Ch\xed Minh City");
        var u = $("#hotelRelated").val(),
            c = $("#hotelCode").val(),
            h = $("#HotelName").val();
        $("#hotelType").val();
        var v = $("#hotelRating").val(),
            s = getCookie("roomNumber");
        u && (related_property_ids = JSON.parse(u).map(e => e.HotelIdR).join(","), related_list_name = "Kh\xe1ch sạn tương tự " + h);
        var y = new Date(new Date(i) - new Date(o)) / 1e3 / 60 / 60 / 24;
        gtag("event", "view_item", {
            currency: "VND",
            value: e,
            items: [{
                item_id: c,
                item_name: h,
                discount: t,
                index: 0,
                item_brand: "iVIVU.com",
                item_category: "Hotels",
                item_category2: r,
                item_category3: v,
                item_category4: n,
                price: e / (s * y),
                quantity: s * y
            }]
        })
    }
}

function doInitiateCheckoutGa(e, t, n) {
    var d = "" != document.getElementById("hdhdhdhhdhdhdhdhdhd").value ? "user" : "kmudivivu";
    if ("true" == uatMode && "kmudivivu" == d) {
        var o = Static.convertDate(getCookie("di")),
            i = Static.convertDate(getCookie("do"));
        document.getElementById("regionAddress") && document.getElementById("regionAddress").value;
        var r = $("#regionName").val(),
            a = readCookie("HOTLINE"),
            l = "Hồ Ch\xed Minh City";
        null != a && void 0 != a && "" != a && (l = JSON.parse(a).yourCity ?? "Hồ Ch\xed Minh City");
        var u = $("#hotelRelated").val(),
            c = $("#hotelCode").val(),
            h = $("#HotelName").val();
        $("#hotelType").val();
        var v = $("#hotelRating").val(),
            s = getCookie("roomNumber");
        u && (related_property_ids = JSON.parse(u).map(e => e.HotelIdR).join(","), related_list_name = "Kh\xe1ch sạn tương tự " + h);
        var y = new Date(new Date(i) - new Date(o)) / 1e3 / 60 / 60 / 24;
        gtag("event", "begin_checkout", {
            currency: "VND",
            value: e,
            items: [{
                item_id: c,
                item_name: h,
                discount: t,
                index: 0,
                item_brand: "iVIVU.com",
                item_category: "Hotels",
                item_category2: r,
                item_category3: v,
                item_category4: n,
                price: e / (s * y),
                quantity: s * y
            }]
        })
    }
}

function doPurchaseGa(e, t, n, d, o) {
    var i = "" != document.getElementById("hdhdhdhhdhdhdhdhdhd").value ? "user" : "kmudivivu";
    if ("true" == uatMode && "kmudivivu" == i) {
        var r = Static.convertDate(getCookie("di")),
            a = Static.convertDate(getCookie("do"));
        document.getElementById("regionAddress") && document.getElementById("regionAddress").value;
        var l = $("#regionName").val(),
            u = readCookie("HOTLINE"),
            c = "Hồ Ch\xed Minh City";
        null != u && void 0 != u && "" != u && (c = JSON.parse(u).yourCity ?? "Hồ Ch\xed Minh City");
        var h = $("#hotelRelated").val(),
            v = $("#hotelCode").val(),
            s = $("#HotelName").val();
        $("#hotelType").val();
        var y = $("#hotelRating").val(),
            m = getCookie("roomNumber");
        h && (related_property_ids = JSON.parse(h).map(e => e.HotelIdR).join(","), related_list_name = "Kh\xe1ch sạn tương tự " + s);
        var g = new Date(new Date(a) - new Date(r)) / 1e3 / 60 / 60 / 24;
        gtag("event", "purchase", {
            currency: "VND",
            value: e,
            transaction_id: o,
            payment_type: "On Request",
            items: [{
                item_id: v,
                item_name: s,
                discount: t,
                index: 0,
                item_brand: "iVIVU.com",
                item_category: "Hotels",
                item_category2: l,
                item_category3: y,
                item_category4: d,
                item_category5: n,
                price: e / (m * g),
                quantity: m * g
            }]
        })
    }
}

function doAddShippingInfoGa(e, t, n) {
    var d = "" != document.getElementById("hdhdhdhhdhdhdhdhdhd").value ? "user" : "kmudivivu";
    if ("true" == uatMode && "kmudivivu" == d) {
        var o = Static.convertDate(getCookie("di")),
            i = Static.convertDate(getCookie("do"));
        document.getElementById("regionAddress") && document.getElementById("regionAddress").value;
        var r = $("#regionName").val(),
            a = readCookie("HOTLINE"),
            l = "Hồ Ch\xed Minh City";
        null != a && void 0 != a && "" != a && (l = JSON.parse(a).yourCity ?? "Hồ Ch\xed Minh City");
        var u = $("#hotelRelated").val(),
            c = $("#hotelCode").val(),
            h = $("#HotelName").val();
        $("#hotelType").val();
        var v = $("#hotelRating").val(),
            s = getCookie("roomNumber");
        u && (related_property_ids = JSON.parse(u).map(e => e.HotelIdR).join(","), related_list_name = "Kh\xe1ch sạn tương tự " + h);
        var y = new Date(new Date(i) - new Date(o)) / 1e3 / 60 / 60 / 24;
        gtag("event", "add_shipping_info", {
            currency: "VND",
            value: e,
            shipping_tier: "Ground",
            items: [{
                item_id: c,
                item_name: h,
                discount: t,
                index: 0,
                item_brand: "iVIVU.com",
                item_category: "Hotels",
                item_category2: r,
                item_category3: v,
                item_category4: n,
                price: e / (s * y),
                quantity: s * y
            }]
        })
    }
}

function doAddPaymentInfo(e, t, n, d) {
    var o = "" != document.getElementById("hdhdhdhhdhdhdhdhdhd").value ? "user" : "kmudivivu";
    if ("true" == uatMode && "kmudivivu" == o) {
        var i = Static.convertDate(getCookie("di")),
            r = Static.convertDate(getCookie("do"));
        document.getElementById("regionAddress") && document.getElementById("regionAddress").value;
        var a = $("#regionName").val(),
            l = readCookie("HOTLINE"),
            u = "Hồ Ch\xed Minh City";
        null != l && void 0 != l && "" != l && (u = JSON.parse(l).yourCity ?? "Hồ Ch\xed Minh City");
        var c = $("#hotelRelated").val(),
            h = $("#hotelCode").val(),
            v = $("#HotelName").val();
        $("#hotelType").val();
        var s = $("#hotelRating").val(),
            y = getCookie("roomNumber");
        c && (related_property_ids = JSON.parse(c).map(e => e.HotelIdR).join(","), related_list_name = "Kh\xe1ch sạn tương tự " + v);
        var m = new Date(new Date(r) - new Date(i)) / 1e3 / 60 / 60 / 24;
        gtag("event", "add_payment_info", {
            currency: "VND",
            value: e,
            payment_type: n,
            items: [{
                item_id: h,
                item_name: v,
                discount: t,
                index: 0,
                item_brand: "iVIVU.com",
                item_category: "Hotels",
                item_category2: a,
                item_category3: s,
                item_category4: d,
                price: e / (y * m),
                quantity: y * m
            }]
        })
    }
}

function doSearchPixel(e, t, n, d, o) {
    var i = "" != document.getElementById("hdhdhdhhdhdhdhdhdhd").value ? "user" : "kmudivivu";
    if ("true" == uatMode && "kmudivivu" == i) {
        var r = LocalStorageManager.getValue("datakey"),
            a = null != r ? r.FilterRooms.RoomsRequest[0].Adults.value : 2,
            l = null != r ? r.FilterRooms.RoomsRequest[0].Child.value : 0,
            u = Static.convertDate(getCookie("di")),
            c = Static.convertDate(getCookie("do"));
        (void 0 == n || "" == n) && (n = document.getElementById("countryAddress").value), (void 0 == d || "" == d) && (d = document.getElementById("cityAddress").value), (void 0 == o || "" == o) && (o = document.getElementById("regionAddress").value);
        var h = {
            content_type: "hotel",
            content_category: t,
            checkin_date: u,
            checkout_date: c,
            content_ids: e,
            city: d,
            region: o,
            country: n,
            num_adults: a,
            num_children: l
        };
        fbq("trackSingle", "1505476653113156", "Search", h), ttq.track("ViewContent", {
            content_type: "product_group",
            content_id: e,
            quantity: 1
        }), e.indexOf(",") >= 0 && JSON.parse(e)[0]
    }
}

function doInitiateCheckoutPixel(e, t, n, d, o) {
    var i = "" != document.getElementById("hdhdhdhhdhdhdhdhdhd").value ? "user" : "kmudivivu";
    if ("true" == uatMode && "kmudivivu" == i) {
        var r = null;
        "undefined" != typeof angular && (r = angular.element(".htdt-container").scope()), r || (r = LocalStorageManager.getValue("datakey"));
        var a = null != r ? r.FilterRooms.RoomsRequest[0].Adults.value : 2,
            l = null != r ? r.FilterRooms.RoomsRequest[0].Child.value : 0,
            u = Static.convertDate(getCookie("di")),
            c = Static.convertDate(getCookie("do")),
            h = document.getElementById("countryAddress") ? document.getElementById("countryAddress").value : "",
            v = document.getElementById("cityAddress") ? document.getElementById("cityAddress").value : "",
            s = document.getElementById("regionAddress") ? document.getElementById("regionAddress").value : "";
        "request combo" == t && (n = parseFloat(n) * a);
        var y = {
            content_type: "hotel",
            currency: "VND",
            content_category: t,
            checkin_date: u,
            checkout_date: c,
            content_ids: e,
            city: v,
            region: s,
            country: h,
            num_adults: a,
            num_children: l,
            value: n
        };
        (n == NaN || 0 == n || void 0 == n || null == n || "" == n) && (y = {
            content_type: "hotel",
            content_category: t,
            checkin_date: u,
            checkout_date: c,
            content_ids: e,
            city: v,
            region: s,
            country: h,
            num_adults: a,
            num_children: l
        }), fbq("trackSingle", "1505476653113156", "InitiateCheckout", y);
        var m = {
            content_type: "product",
            content_id: e,
            quantity: 1,
            price: n,
            value: n,
            currency: "VND"
        };
        ttq.track("InitiateCheckout", m), gtag("event", "page_view", {
            send_to: "AW-952773342",
            hrental_id: e,
            hrental_pagetype: "conversionintent",
            hrental_totalvalue: "" + n
        })
    }
}

function doPurchasePixel(e, t, n, d, o) {
    var i = "" != document.getElementById("hdhdhdhhdhdhdhdhdhd").value ? "user" : "kmudivivu";
    if ("true" == uatMode && "kmudivivu" == i) {
        var r = null;
        "undefined" != typeof angular && (r = angular.element(".htdt-container").scope()), r || (r = LocalStorageManager.getValue("datakey"));
        var a = null != r ? r.FilterRooms.RoomsRequest[0].Adults.value : 2,
            l = null != r ? r.FilterRooms.RoomsRequest[0].Child.value : 0,
            u = Static.convertDate(getCookie("di")),
            c = Static.convertDate(getCookie("do")),
            h = document.getElementById("countryAddress") ? document.getElementById("countryAddress").value : "",
            v = document.getElementById("cityAddress") ? document.getElementById("cityAddress").value : "",
            s = document.getElementById("regionAddress") ? document.getElementById("regionAddress").value : "";
        "request combo" == n && (e = parseFloat(e) * a);
        var y = {
            value: e,
            currency: "VND",
            content_type: "hotel",
            content_category: n,
            checkin_date: u,
            checkout_date: c,
            content_ids: t,
            city: v,
            region: s,
            country: h,
            num_adults: a,
            num_children: l,
            currency: "VND"
        };
        fbq("trackSingle", "1505476653113156", "Purchase", y);
        var m = {
            content_type: "product",
            content_id: t,
            quantity: 1,
            price: e,
            value: e,
            currency: "VND"
        };
        ttq.track("CompletePayment", m), gtag("event", "page_view", {
            send_to: "AW-952773342",
            hrental_id: t,
            hrental_pagetype: "conversion",
            hrental_totalvalue: "" + e
        })
    }
}

function doInitiateCheckoutPixelFS(e, t, n, d, o) {
    var i = null;
    "undefined" != typeof angular && (i = angular.element(".htdt-container").scope());
    var r = "" != document.getElementById("hdhdhdhhdhdhdhdhdhd").value ? "user" : "kmudivivu";
    if ("true" == uatMode && "kmudivivu" == r) {
        var a, l = null != i.FSAdults ? i.FSAdults.value : 2,
            u = null != i.FSChild ? i.FSChild.value : 0,
            c = Static.convertDate(i.fsDateCheckinStr),
            h = Static.convertDate(i.fsDateCheckoutStr),
            v = document.getElementById("countryAddress") ? document.getElementById("countryAddress").value : "",
            s = document.getElementById("cityAddress") ? document.getElementById("cityAddress").value : "",
            y = document.getElementById("regionAddress") ? document.getElementById("regionAddress").value : "";
        if ("request combo" == t) {
            n = (i && i.MealTypeFS ? i.MealTypeFS.PriceAvgPlusTA : null) || parseFloat(n) * l
        }
        var m = {
            content_type: "hotel",
            currency: "VND",
            content_category: t,
            checkin_date: c,
            checkout_date: h,
            content_ids: e,
            city: s,
            region: y,
            country: v,
            num_adults: l,
            num_children: u,
            value: n
        };
        0 == n && (m = {
            content_type: "hotel",
            content_category: t,
            checkin_date: c,
            checkout_date: h,
            content_ids: e,
            city: s,
            region: y,
            country: v,
            num_adults: l,
            num_children: u
        }), fbq("trackSingle", "1505476653113156", "InitiateCheckout", m);
        var g = {
            content_type: "product",
            content_id: e,
            quantity: 1,
            price: n,
            value: n,
            currency: "VND"
        };
        ttq.track("InitiateCheckout", g)
    }
}

function doSearchPixelFS(e, t) {
    var n = null;
    "undefined" != typeof angular && (n = angular.element(".htdt-container").scope());
    var d = "" != document.getElementById("hdhdhdhhdhdhdhdhdhd").value ? "user" : "kmudivivu";
    if ("true" == uatMode && "kmudivivu" == d) {
        var o, i = null != n.FSAdults ? n.FSAdults.value : 2,
            r = null != n.FSChild ? n.FSChild.value : 0,
            a = Static.convertDate(n.fsDateCheckinStr),
            l = Static.convertDate(n.fsDateCheckoutStr),
            u = document.getElementById("countryAddress") ? document.getElementById("countryAddress").value : "",
            c = document.getElementById("cityAddress") ? document.getElementById("cityAddress").value : "";
        fbq("trackSingle", "1505476653113156", "Search", {
            content_type: "hotel",
            content_category: t,
            checkin_date: a,
            checkout_date: l,
            content_ids: e,
            city: c,
            region: document.getElementById("regionAddress") ? document.getElementById("regionAddress").value : "",
            country: u,
            num_adults: i,
            num_children: r
        }), ttq.track("Search", {
            content_type: "product",
            content_id: e,
            quantity: 1
        })
    }
}

function doPurchasePixelFS(e, t, n, d, o) {
    var i = null;
    "undefined" != typeof angular && (i = angular.element(".htdt-container").scope());
    var r = "" != document.getElementById("hdhdhdhhdhdhdhdhdhd").value ? "user" : "kmudivivu";
    if ("true" == uatMode && "kmudivivu" == r) {
        var a, l = null != i.FSAdults ? i.FSAdults.value : 2,
            u = null != i.FSChild ? i.FSChild.value : 0,
            c = Static.convertDate(i.fsDateCheckinStr),
            h = Static.convertDate(i.fsDateCheckoutStr),
            v = document.getElementById("countryAddress") ? document.getElementById("countryAddress").value : "",
            s = document.getElementById("cityAddress") ? document.getElementById("cityAddress").value : "",
            y = document.getElementById("regionAddress") ? document.getElementById("regionAddress").value : "";
        if ("request combo" == n) {
            e = (i && i.MealTypeFS ? i.MealTypeFS.PriceAvgPlusTA : null) || parseFloat(e) * l
        }
        fbq("trackSingle", "1505476653113156", "Purchase", {
            value: e,
            currency: "VND",
            content_type: "hotel",
            content_category: n,
            checkin_date: c,
            checkout_date: h,
            content_ids: t,
            city: s,
            region: y,
            country: v,
            num_adults: l,
            num_children: u,
            currency: "VND"
        });
        var m = {
            content_type: "product",
            content_id: t,
            quantity: 1,
            price: e,
            value: e,
            currency: "VND"
        };
        ttq.track("CompletePayment", m)
    }
}
document.addEventListener("DOMContentLoaded", function(e) {
    if ("undefined" != typeof runInitPixel && "undefined" != typeof customData) switch (runInitPixel) {
        case "ViewContent":
            doViewContentPixel(customData.value, customData.content_ids, customData.cat_str);
            break;
        case "InitiateCheckout":
            doInitiateCheckoutPixel(customData.content_ids, customData.cat_str, customData.value);
            break;
        case "Purchase":
            doPurchasePixel(customData.value, customData.content_ids, customData.cat_str);
            break;
        case "Search":
            doSearchPixel(customData.content_ids, customData.cat_str, customData.country, customData.city, customData.region)
    }
});
1