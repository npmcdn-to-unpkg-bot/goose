<?php
if(!defined("GOOSE")){exit();}

$userEmail = (isset($userEmail)) ? $userEmail : '';
$userPassword = (isset($userPassword)) ? $userPassword : '';
?>

<section class="goose-auth">
	<div class="hgroup">
		<h1>관리자 인증</h1>
	</div>
	<form action="<?=GOOSE_ROOT?>/auth/login/" method="post">
		<input type="hidden" name="redir" value="<?=$_SERVER['REQUEST_URI']?>"/>
		<fieldset>
			<legend class="blind">로그인 인증</legend>
			<label>
				<span>- 이메일주소</span>
				<input type="email" name="email" maxlength="40" placeholder="이메일 주소" class="block" value="<?=$userEmail?>" />
			</label>
			<label>
				<span>- 비밀번호</span>
				<input type="password" name="password" maxlength="20" placeholder="비밀번호 입력" class="block" value="<?=$userPassword?>" />
			</label>
		</fieldset>
		<div class="btngroup">
			<button type="submit" class="ui-button btn-highlight block">확인</button>
		</div>
	</form>
</section>
