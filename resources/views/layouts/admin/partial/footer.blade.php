<footer class="footer">
    @if ($admin_setting && $admin_setting->footer_text)
        {!! $admin_setting->footer_text !!}
    @else
        © 2023 Developed by <a target="_blank" href="http://www.technoparkbd.com/">Techno Park
            Bangladesh</a>
    @endif
</footer>
