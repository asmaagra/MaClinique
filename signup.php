<?php session_start() ?>
<div class="container-fluid">
	<form action="" id="signup-frm">
		<div class="form-group">
			<label for="" class="control-label">Nom</label>
			<input type="text" name="name" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Contact</label>
			<input type="text" name="contact" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Adresse</label>
			<textarea cols="30" rows="3" name="address" required="" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Email</label>
			<input type="email" name="email" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Mot de passe</label>
			<input type="password" name="password" required="" class="form-control">
		</div>
		<button class="button btn btn-info btn-sm">Créer</button>
	</form>
</div>

<style>
	#uni_modal .modal-footer{
		display:none;
	}
</style>
<script>
	$('#signup-frm').submit(function(e){
		e.preventDefault()
		$('#signup-frm button[type="submit"]').attr('disabled',true).html('Saving...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'admin/ajax.php?action=signup',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#signup-frm button[type="submit"]').removeAttr('disabled').html('Create');

			},
			/*success:function(resp){
				if(resp == 1){
					location.reload();
				}else{
					$('#signup-frm').prepend('<div class="alert alert-danger">Email already exist.</div>')
					$('#signup-frm button[type="submit"]').removeAttr('disabled').html('Create');
				}
			}*/
		})
	})
	function signup(){
    extract($_POST);
    $data = " nom= '$name' ";
    $data .= ", contact = '$contact' ";
    $data .= ", adresse = '$address' ";
    $data .= ", utilisateur = '$email' ";
    $data .= ", mot de passe = '".md5($password)."' "; // Correction du champ mot de passe

    // Vérification de l'existence de l'email
    $chk = $this->db->query("SELECT * FROM users where utilisateur = '$email' ")->num_rows;

    // Si l'email existe déjà, ajoutez simplement un identifiant unique à l'email pour créer un nouveau compte
    if($chk > 0){
        $email = $email . "_" . uniqid(); // Ajout d'un identifiant unique à l'email existant
    }

    // Insertion du nouvel utilisateur avec l'email modifié
    $save = $this->db->query("INSERT INTO users set ".$data);

    if($save){
        $qry = $this->db->query("SELECT * FROM users where utilisateur = '".$email."' and mot de passe = '".md5($password)."' ");
        if($qry->num_rows > 0){
            foreach ($qry->fetch_array() as $key => $value) {
                if($key != 'passwors' && !is_numeric($key))
                    $_SESSION['login_'.$key] = $value;
            }
        }
        return 1;
    }
}

</script>