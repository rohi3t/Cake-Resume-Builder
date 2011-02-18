<div class="section_wrapper">
	<h2 class="section_title_left">
		<span><?=$sectionName['education']?></span>
	</h2>
	<div class="section_details_right">
		<? foreach ($resume['ResumeEducation'] as $edu) { ?>
			<h3><?= $edu['institution'] ?></h3>
			<p><?= $edu['degree'] ?>, <?= $edu['field_of_study'] ?>, <?= $edu['begin_date'] ?> - <?= $edu['end_date'] ? $edu['end_date'] : 'present' ?></p>
		<? } ?>
	</div>

	<div class="clearfloat"></div>
	
</div>