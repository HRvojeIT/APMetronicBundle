<?php

namespace APNet\Bundle\APMetronicBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HeaderController extends Controller
{

    public function _showNotificationsAction($top_menu_style)
    {
		// Verifica se è stato inserito il servizio apmetronic.header, in caso contrario
		// nasconde le notifiche
		if($this->container->has('apmetronic.header')) {
			$notificationArray = $this->get('apmetronic.header')->_getNotifications();
			$notificationArray['top_menu_style'] = $top_menu_style;
			return
				$this->render('APMetronicBundle:metronic/pezzi/header:notification_dropdown.html.twig',
				$notificationArray
			);
		} else
			return new Response();
    }

	public function _showTasksAction($top_menu_style)
    {
		// Verifica se è stato inserito il servizio apmetronic.header, in caso contrario
		// nasconde i tasks
		if($this->container->has('apmetronic.header')) {
			$tasksArray = $this->get('apmetronic.header')->_getTasks();
			$tasksArray['top_menu_style'] = $top_menu_style;
			return
				$this->render('APMetronicBundle:metronic/pezzi/header:todo_dropdown.html.twig',
				$tasksArray);
		} else
			return new Response();
    }

}
