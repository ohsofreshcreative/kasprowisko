<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Start extends Block
{
	public $name = 'Start';
	public $description = 'start';
	public $slug = 'start';
	public $category = 'formatting';
	public $icon = 'align-full-width';
	public $keywords = ['tresc', 'zdjecie'];
	public $mode = 'edit';
	public $supports = [
		'align' => false,
		'mode' => true,
		'jsx' => true,
	];

	public function fields()
	{
		$start = new FieldsBuilder('start');

		$start
			->setLocation('block', '==', 'acf/start') // ważne!
			->addTab('Treść', ['placement' => 'top'])
			->addGroup('g_start', ['label' => 'Start'])
			->addImage('image', [
				'label' => 'Obraz',
				'return_format' => 'array', // lub 'url', lub 'id'
				'preview_size' => 'medium',
				'required' => 1,
			])
			->addText('header', [
				'label' => 'Nagłówek',
			])
			->addWysiwyg('text', [
				'label' => 'Treść',
				'tabs' => 'all', // 'visual', 'text', 'all'
				'toolbar' => 'full', // 'basic', 'full'
				'media_upload' => true,
			])
			->addText('date', ['label' => 'Data'])
			->addText('place', ['label' => 'Miejsce'])
			->addText('link', ['label' => 'Link do miejsca'])
			->addLink('button1', [
				'label' => 'Przycisk #1',
				'return_format' => 'array',
			])
			->addLink('button2', [
				'label' => 'Przycisk #2',
				'return_format' => 'array',
			])

			->endGroup()

			->addTab('Ustawienia bloku', ['placement' => 'top'])

			->addTrueFalse('flip', [
				'label' => 'Odwrotna kolejność',
				'ui' => 1,
				'ui_on_text' => 'Tak',
				'ui_off_text' => 'Nie',
			]);

		return $start;
	}

	public function with()
	{
		return [
			'g_start' => get_field('g_start'),
			'section_id' => get_field('section_id'),
			'section_class' => get_field('section_class'),
			'flip' => get_field('flip'),
		];
	}
}
