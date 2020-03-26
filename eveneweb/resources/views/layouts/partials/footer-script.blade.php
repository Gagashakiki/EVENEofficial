        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('plugins/jquery/jquery-migrate-3.0.0.min.js') }}"></script>
		<script src="{{ asset('plugins/jquery-ui/jquery-ui.js') }}"></script>
		<script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script>
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('plugins/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
		<script src="{{ asset('plugins/slick/slick.js') }}"></script>
		<script src="{{ asset('plugins/fancybox/jquery.fancybox.min.js') }}"></script>
		<script src="{{ asset('plugins/iziToast/js/iziToast.js') }}"></script>
		<script src="{{ asset('plugins/prismjs/prism.js') }}"></script>
		<script src="{{ asset('plugins/selectbox/jquery.selectbox-0.1.3.min.js') }}"></script>
		<script src="{{ asset('plugins/countdown/jquery.syotimer.js') }}"></script>
		<script src="{{ asset('plugins/velocity/velocity.min.js') }}"></script>
		<script src="{{ asset('js/ekko-lightbox.js') }}"></script>
		<script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/mask/dist/jquery.masknumber.js') }}"></script>
    <script src="{{ asset('js/mask/dist/jquery.masknumber.min.js') }}"></script>

		<!-- ** Lightbox Script ** -->
		<script>
			$(document).on("click", '[data-toggle="lightbox"]', function(event) {
			event.preventDefault();
			$(this).ekkoLightbox();
			});
		</script>
