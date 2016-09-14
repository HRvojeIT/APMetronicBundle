<?php

namespace APNet\Bundle\APMetronicBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HeaderController extends Controller
{

    public function _showNotificationsAction($params)
    {
		// Verifica se è stato inserito il servizio apmetronic.header, in caso contrario
		// nasconde le notifiche
		print_r($params);
		echo "AAAA";
		print_r($request->query);
		exit();
		if($this->container->has('apmetronic.header')) {
			$notificationArray = $this->get('apmetronic.header')->_getNotifications();
			return
				$this->render('APMetronicBundle:metronic/pezzi/header:notification_dropdown.html.twig',
				$notificationArray
			);
		} else
			return new Response();
    }

	public function _showTasksAction()
    {
		// Verifica se è stato inserito il servizio apmetronic.header, in caso contrario
		// nasconde i tasks
		if($this->container->has('apmetronic.header')) {
			$tasksArray = $this->get('apmetronic.header')->_getTasks();
			return
				$this->render('APMetronicBundle:metronic/pezzi/header:todo_dropdown.html.twig',
				$tasksArray);
		} else
			return new Response();
    }

}
