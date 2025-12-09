<?php

namespace UncleCheese\EventCalendar\Tasks;

use SilverStripe\Dev\BuildTask;
use UncleCheese\EventCalendar\Tasks\CachedCalendarTask;
use SilverStripe\PolyExecution\PolyOutput;
use Symfony\Component\Console\Input\InputInterface;

class CachedCalendarBuildTask extends BuildTask 
{
	protected string $title = "Cache the Event Calendars";
	
	protected static string $description = 'Generates a given number of years of events and populates a readonly table with all the event information. Useful when using recurring events or multiple calendars.';
	
	public function execute(InputInterface $input, PolyOutput $output): int {
		CachedCalendarTask::create()->process();
		return 0;
	}
}