				<h1 align="center" id="contact">CONTACT US</h1>
				<div class="row">
					<div class="col-md-6">
					<br>
					<center>
						<img src="<?= base_url('assets/img/cs.png') ?>" alt="cs" width="100%">
					</center>
					</div>
					<div class="col-md-6">
					   <form action="<?= base_url('send_email'); ?>" method="post" class="contact-form">
					      <div class="form-field col x-50">
					         <input id="name" name="name" class="input-text js-input " type="text" required>
					         <label class="label" for="name">Name</label>
					      </div>
					      <div class="form-field col x-50">
					         <input id="email" name="email" class="input-text js-input" type="email" required>
					         <label class="label" for="email">E-mail</label>
					      </div>
					      <div class="form-field col x-100">
					         <input id="no_telp" name="no_telp" class="input-text js-input" type="text" required>
					         <label class="label" for="no_telp">No Telp</label>
					      </div>
					      <div class="form-field col x-100">
					         <input id="subject" name="subject" class="input-text js-input" type="text" required>
					         <label class="label" for="subject">Subject</label>
					      </div>
					      <div class="form-field col x-100">
					         <input id="message" name="message" class="input-text js-input" type="text" required>
					         <label class="label" for="message">Message</label>
					      </div>
					      <div class="form-field col x-100 align-center">
					         <input class="submit-btn" type="submit" value="Submit">
					      </div>
					   </form>
					</div>
				</div>
		
		</div>