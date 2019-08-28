<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cosmo/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title><?=isset($title) ? $title: 'AscendPHP'; ?></title>
    <style>
        .cookiealert {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            margin: 0 !important;
            z-index: 999;
            opacity: 0;
            border-radius: 0;
            transform: translateY(100%);
            transition: all 500ms ease-out;
            color: #ecf0f1;
            background: #212327 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAAEECAIAAAAd4J55AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTMyIDc5LjE1OTI4NCwgMjAxNi8wNC8xOS0xMzoxMzo0MCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUuNSAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUIyQzg0Q0RDQ0ExMTFFNjkyMDJGQkMzNjQ3OUEyMTQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUIyQzg0Q0VDQ0ExMTFFNjkyMDJGQkMzNjQ3OUEyMTQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5QjJDODRDQkNDQTExMUU2OTIwMkZCQzM2NDc5QTIxNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5QjJDODRDQ0NDQTExMUU2OTIwMkZCQzM2NDc5QTIxNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PnMLhJsAAB3qSURBVHja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');
        }

        .cookiealert.show {
            opacity: 1;
            transform: translateY(0%);
            transition-delay: 1000ms;
        }

        .cookiealert a {
            text-decoration: underline
        }

        .cookiealert .acceptcookies {
            margin-left: 10px;
            vertical-align: baseline;
        }
    </style>
</head>
<body class="text-center">

<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <h3 class="masthead-brand">Cover</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link" href="#">Documents</a>
            </nav>
        </div>
    </header>

    <main role="main" class="inner cover">
        <?= $container ?? ''; ?>
    </main>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p>Copyright &copy;</p>
        </div>
    </footer>
</div>

<div class="alert alert-dismissible text-center cookiealert" role="alert">
    <div class="cookiealert-container">
        This website uses cookies to ensure you get the best experience on our website. <a href="/privacy-policy" target="_blank">Learn more</a>

        <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
            I agree
        </button>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.6/holder.min.js"></script>
<script src="/js/jquery-ajax-put-delete.js?tm=<?=time();?>"></script>
<script src="/js/cookiealert.js?tm=<?=time();?>"></script>
<?php
if (isset($scripts) && is_array($scripts)) {
    foreach ($scripts AS $file) {
        echo '<script src="' . $file . '?tm=' . time() . '"></script>' . PHP_EOL;
    }
}
?>
<script>
    <?= $javascript ?? ''; ?>
</script>
</body>
</html>