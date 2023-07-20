<?php

/**
 * View: List Event
 *
 * Gracefully copied from the the-event-calendar event template
 * We need this to get access to the actual event object.
 */

$container_classes = ['tribe-common-g-row', 'tribe-events-calendar-list__event-row'];
$container_classes['tribe-events-calendar-list__event-row--featured'] = $event->featured;

$event_classes = tribe_get_post_class(['tribe-events-calendar-list__event', 'tribe-common-g-row', 'tribe-common-g-row--gutters'], $event->ID);
?>
<div <?php tribe_classes($container_classes); ?>>

    <?php $this->template('list/event/date-tag', ['event' => $event]); ?>

    <div class="tribe-events-calendar-list__event-wrapper tribe-common-g-col">
        <article <?php tribe_classes($event_classes) ?>>
            <?php $this->template('list/event/featured-image', ['event' => $event]); ?>

            <div class="tribe-events-calendar-list__event-details tribe-common-g-col">

                <header class="tribe-events-calendar-list__event-header">
                    <?php $this->template('list/event/date', ['event' => $event]); ?>
                    <?php $this->template('list/event/title', ['event' => $event]); ?>
                    <?php $this->template('list/event/venue', ['event' => $event]); ?>
                </header>

                <?php $this->template('list/event/description', ['event' => $event]); ?>
                <?php $this->template('list/event/cost', ['event' => $event]); ?>

                <?php
                do_action("event_extend",$event);
                ?>
            </div>
        </article>
    </div>
</div>