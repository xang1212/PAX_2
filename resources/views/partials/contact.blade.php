<div class="contact-container">
	<div class="contact-overlay">
		<i id="close-contact" class="fas fa-times"></i>

		<div class="contact-content">
			<div>
				<h2>ຕິດຕໍ່ພວກເຮົາ</h2>
				<h4>ແຈ້ງບັນຫາທີ່ທ່ານພົບ</h4>
				<form action="{{ route('contact') }}" method="POST">
					@csrf
					<input type="text" name="name" placeholder="ຊື່">
					<input type="email" name="email" placeholder="ອີເມວ">
					<textarea name="message" placeholder="ຂໍ້ຄວາມ"></textarea>
					<button type="submit" class="button button-black">ສົ່ງຂໍ້ມູນ</button>
				</form> <!-- end form -->

				<div class="social-links">
			        {{ menu('footer', 'partials.menus.footer') }}
				</div>
			</div>
		</div>
	</div>
</div>