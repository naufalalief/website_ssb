<!DOCTYPE html>
<html lang="en">

<head>
    <script nonce="0e8ce7db-8c1d-40a5-88f6-1a368ec5fad7">
        (function(w, d) {
            ! function(a, e, t, r) {
                a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = {
                    deferred: []
                }, a.zaraz.track = (e, t) => {
                    for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key]
                }, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => {
                    a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r])
                }, a.addEventListener("DOMContentLoaded", (() => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen
                        .width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData
                        .e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a
                        .zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o =
                        (new Date).getTimezoneOffset(), z.defer = !0, z.src = "/cdn-cgi/zaraz/s.js?z=" +
                        btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z,
                            t)
                }))
            }(w, d, 0, "script");
        })(window, document);
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sekolah Sepak Bola Petrokimia Gresik | Log in</title>

    {{-- login --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/icheck-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

</head>
<main class="py-4">
    @yield('content')
</main>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
