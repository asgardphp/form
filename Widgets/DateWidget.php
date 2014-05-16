<?php
namespace Asgard\Form\Widgets;

class DateWidget extends \Asgard\Form\Widget {
	public function render(array $options=array()) {
		$options = $this->options+$options;

		$day = $this->field->getDay();
		$month = $this->field->getMonth();
		$year = $this->field->getYear();

		return \Asgard\Form\HTMLWidget::select($this->field->getName().'[day]', $day, array('choices'=>array_combine(range(1, 31), range(1, 31))))->render().
		       \Asgard\Form\HTMLWidget::select($this->field->getName().'[month]', $month, array('choices'=>array_combine(range(1, 12), range(1, 12))))->render().
		       \Asgard\Form\HTMLWidget::select($this->field->getName().'[year]', $year, array('choices'=>array_combine(range(date('Y'), date('Y')-50), range(date('Y'), date('Y')-50))))->render();
	}
}