<footer class="footer">
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item">
                <a href="https://creative-tim.com" target="blank" class="nav-link">
                    {{ trans('Creative Tim') }} 
                </a>
            </li>
            <li class="nav-item">
                <a href="https://updivision.com" target="blank" class="nav-link">
                    {{ trans('Updivision') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    {{ trans('About Us') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    {{ trans('Blog') }}
                </a>
            </li>
        </ul>
        <div class="copyright">
            &copy; {{ now()->year }} {{ trans('made with') }} <i class="tim-icons icon-heart-2"></i> {{ trans('by') }}
            <a href="https://creative-tim.com" target="_blank">{{ trans('Creative Tim') }}</a> &amp;
            <a href="https://updivision.com" target="_blank">{{ trans('Updivision') }}</a> {{ trans('for a better web') }}.
        </div>
    </div>
</footer>
