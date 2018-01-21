(function($){
	window.App = window.App || {};
	App.Widgets = App.Widgets || {};
	App.Objects = App.Objects || {};
	App.Helpers = App.Helpers || {};
	App.Locale = App.Locale || {};
	App.User = App.User || {};

	/**
	 * Основной класс приложения
	 * Все методы, начинающиеся с "init" запускаются автоматически при полной загрузке страницы
 	 */
	let Application = can.Control.extend({}, {
		init() {

		},

		bootstrap() {
			let method;

			for (method in this) {
				if (method.length > 4 && method.substr(0, 4) === 'init') {
					this[method]();
				}
			}

			can.route.ready();
		},

		/**
		 * Навешивает контроллер на DOM элемент и возвращает его instance
		 * @param selector
		 * @param controllerName
		 * @param settings
		 * @returns {*}
		 */
		installController(selector, controllerName, settings = {}) {
			return this.element.find(selector)[controllerName](settings).control(controllerName);
		},

		/**
		 * Инициадизация кастомных компонент вроде селектов, чекбоксов и прочего
		 */
		initCustomComponents() {

		}

		/*
		initWidgets: function () {
			this.installController('.js-header-menu', 'appWidgetsSearchHeader');
			this.installController('.js-header-footer', 'appWidgetsMenu', {myOption: true});
		}
		*/
	});

	$(function(){
		window.application = new Application('body');
		window.application.bootstrap();
	});

}(jQuery));
