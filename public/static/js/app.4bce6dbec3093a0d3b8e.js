webpackJsonp([2,0],[
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	var _vue = __webpack_require__(1);
	
	var _vue2 = _interopRequireDefault(_vue);
	
	var _bootstrap = __webpack_require__(87);
	
	var _app = __webpack_require__(155);
	
	var App = _interopRequireWildcard(_app);
	
	function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	_bootstrap.router.start(_vue2.default.extend(App), '#app');

/***/ },
/* 1 */,
/* 2 */,
/* 3 */
/***/ function(module, exports, __webpack_require__) {

	/* WEBPACK VAR INJECTION */(function(process) {'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _vue = __webpack_require__(1);
	
	var _vue2 = _interopRequireDefault(_vue);
	
	var _vuex = __webpack_require__(166);
	
	var _vuex2 = _interopRequireDefault(_vuex);
	
	var _logger = __webpack_require__(167);
	
	var _logger2 = _interopRequireDefault(_logger);
	
	var _auth = __webpack_require__(76);
	
	var _auth2 = _interopRequireDefault(_auth);
	
	var _account = __webpack_require__(74);
	
	var _account2 = _interopRequireDefault(_account);
	
	var _notification = __webpack_require__(79);
	
	var _notification2 = _interopRequireDefault(_notification);
	
	var _post = __webpack_require__(82);
	
	var _post2 = _interopRequireDefault(_post);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	_vue2.default.use(_vuex2.default);
	
	exports.default = new _vuex2.default.Store({
	  modules: {
	    auth: _auth2.default,
	    account: _account2.default,
	    notification: _notification2.default,
	    post: _post2.default
	  },
	
	  strict: process.env.NODE_ENV !== 'production',
	
	  plugins: process.env.NODE_ENV !== 'production' ? [(0, _logger2.default)()] : []
	});
	/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(45)))

/***/ },
/* 4 */
/***/ function(module, exports) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	var FETCH_ACCOUNT = exports.FETCH_ACCOUNT = 'FETCH_ACCOUNT';
	var CLEAR_ACCOUNT = exports.CLEAR_ACCOUNT = 'CLEAR_ACCOUNT';
	
	var CHECK_AUTHENTICATION = exports.CHECK_AUTHENTICATION = 'CHECK_AUTHENTICATION';
	var LOGOUT = exports.LOGOUT = 'LOGOUT';
	var LOGIN = exports.LOGIN = 'LOGIN';
	
	var ADD_NOTIFICATION = exports.ADD_NOTIFICATION = 'ADD_NOTIFICATION';
	var DELETE_NOTIFICATION = exports.DELETE_NOTIFICATION = 'DELETE_NOTIFICATION';
	
	var FETCH_POSTS = exports.FETCH_POSTS = 'FETCH_POSTS';
	var CLEAR_POST = exports.CLEAR_POST = 'CLEAR_POST';

/***/ },
/* 5 */,
/* 6 */,
/* 7 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.deleteNotification = exports.addNotification = undefined;
	
	var _mutationTypes = __webpack_require__(4);
	
	var types = _interopRequireWildcard(_mutationTypes);
	
	function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }
	
	var addNotification = exports.addNotification = function addNotification(_ref, notification) {
	  var dispatch = _ref.dispatch;
	
	  dispatch(types.ADD_NOTIFICATION, notification);
	};
	
	var deleteNotification = exports.deleteNotification = function deleteNotification(_ref2, notification) {
	  var dispatch = _ref2.dispatch;
	
	  dispatch(types.DELETE_NOTIFICATION, notification);
	};

/***/ },
/* 8 */
/***/ function(module, exports, __webpack_require__) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.default = {
	  page: function page(main, _page) {
	    return __webpack_require__(170)("./" + main + "/" + _page + "/" + _page + ".vue");
	  },
	  layout: function layout(_layout) {
	    return __webpack_require__(169)("./" + _layout + "/" + _layout + ".vue");
	  },
	  component: function component(_component) {
	    return __webpack_require__(168)("./" + _component + "/" + _component + ".vue");
	  }
	};

/***/ },
/* 9 */,
/* 10 */,
/* 11 */,
/* 12 */,
/* 13 */,
/* 14 */,
/* 15 */,
/* 16 */,
/* 17 */,
/* 18 */,
/* 19 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _login = __webpack_require__(70);
	
	var _login2 = _interopRequireDefault(_login);
	
	var _logout = __webpack_require__(71);
	
	var _logout2 = _interopRequireDefault(_logout);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	exports.default = {
	  login: _login2.default,
	  logout: _logout2.default
	};

/***/ },
/* 20 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _all = __webpack_require__(27);
	
	var _all2 = _interopRequireDefault(_all);
	
	var _destroy = __webpack_require__(72);
	
	var _destroy2 = _interopRequireDefault(_destroy);
	
	var _store = __webpack_require__(73);
	
	var _store2 = _interopRequireDefault(_store);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	exports.default = {
	  all: _all2.default,
	  destroy: _destroy2.default,
	  store: _store2.default
	};

/***/ },
/* 21 */,
/* 22 */,
/* 23 */,
/* 24 */,
/* 25 */,
/* 26 */,
/* 27 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _vue = __webpack_require__(1);
	
	var _vue2 = _interopRequireDefault(_vue);
	
	var _store = __webpack_require__(3);
	
	var _store2 = _interopRequireDefault(_store);
	
	var _actions = __webpack_require__(50);
	
	var _actions2 = __webpack_require__(7);
	
	var _post = __webpack_require__(86);
	
	var _post2 = _interopRequireDefault(_post);
	
	var _pagination = __webpack_require__(85);
	
	var _pagination2 = _interopRequireDefault(_pagination);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var success = function success(_ref) {
	  var data = _ref.data;
	
	  var pagination = _pagination2.default.fetch(data.pagination);
	  var posts = _post2.default.fetchCollection(data.data);
	
	  (0, _actions.fetchPosts)(_store2.default, posts, pagination);
	};
	
	var failed = function failed() {
	  (0, _actions2.addNotification)(_store2.default, {
	    type: 'danger',
	    message: 'Fetching posts failed!'
	  });
	};
	
	exports.default = function () {
	  var page = arguments.length <= 0 || arguments[0] === undefined ? 1 : arguments[0];
	  var limit = arguments.length <= 1 || arguments[1] === undefined ? 5 : arguments[1];
	
	  _vue2.default.http.get('posts?page=' + page + '&limit=' + limit).then(success, failed);
	};

/***/ },
/* 28 */
/***/ function(module, exports, __webpack_require__) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _classCallCheck2 = __webpack_require__(21);
	
	var _classCallCheck3 = _interopRequireDefault(_classCallCheck2);
	
	var _createClass2 = __webpack_require__(22);
	
	var _createClass3 = _interopRequireDefault(_createClass2);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var Transformer = function () {
	  function Transformer() {
	    (0, _classCallCheck3.default)(this, Transformer);
	  }
	
	  (0, _createClass3.default)(Transformer, null, [{
	    key: "fetchCollection",
	    value: function fetchCollection(items) {
	      var _this = this;
	
	      var newCollection = [];
	
	      items.forEach(function (item) {
	        newCollection.push(_this.fetch(item));
	      });
	
	      return newCollection;
	    }
	  }, {
	    key: "sendCollection",
	    value: function sendCollection(items) {
	      var _this2 = this;
	
	      var newCollection = [];
	
	      items.forEach(function (item) {
	        newCollection.push(_this2.send(item));
	      });
	
	      return newCollection;
	    }
	  }]);
	  return Transformer;
	}();
	
	exports.default = Transformer;

/***/ },
/* 29 */,
/* 30 */,
/* 31 */,
/* 32 */,
/* 33 */,
/* 34 */,
/* 35 */,
/* 36 */,
/* 37 */,
/* 38 */,
/* 39 */,
/* 40 */,
/* 41 */,
/* 42 */,
/* 43 */,
/* 44 */,
/* 45 */,
/* 46 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _find = __webpack_require__(69);
	
	var _find2 = _interopRequireDefault(_find);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	exports.default = {
	  find: _find2.default
	};

/***/ },
/* 47 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.clearAccount = exports.fetchAccount = undefined;
	
	var _mutationTypes = __webpack_require__(4);
	
	var types = _interopRequireWildcard(_mutationTypes);
	
	function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }
	
	var fetchAccount = exports.fetchAccount = function fetchAccount(_ref, account) {
	  var dispatch = _ref.dispatch;
	
	  dispatch(types.FETCH_ACCOUNT, account);
	};
	
	var clearAccount = exports.clearAccount = function clearAccount(_ref2) {
	  var dispatch = _ref2.dispatch;
	
	  dispatch(types.CLEAR_ACCOUNT);
	};

/***/ },
/* 48 */
/***/ function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	var state = exports.state = {
	  id: null,
	  email: null,
	  name: null
	};

/***/ },
/* 49 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.checkAuthentication = exports.logout = exports.login = undefined;
	
	var _mutationTypes = __webpack_require__(4);
	
	var types = _interopRequireWildcard(_mutationTypes);
	
	function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }
	
	var login = exports.login = function login(_ref, token) {
	  var dispatch = _ref.dispatch;
	
	  dispatch(types.LOGIN, token);
	};
	
	var logout = exports.logout = function logout(_ref2) {
	  var dispatch = _ref2.dispatch;
	
	  dispatch(types.LOGOUT);
	};
	
	var checkAuthentication = exports.checkAuthentication = function checkAuthentication(_ref3) {
	  var dispatch = _ref3.dispatch;
	
	  dispatch(types.CHECK_AUTHENTICATION);
	};

/***/ },
/* 50 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.clearPost = exports.fetchPosts = undefined;
	
	var _mutationTypes = __webpack_require__(4);
	
	var types = _interopRequireWildcard(_mutationTypes);
	
	function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }
	
	var fetchPosts = exports.fetchPosts = function fetchPosts(_ref, posts, pagination) {
	  var dispatch = _ref.dispatch;
	
	  dispatch(types.FETCH_POSTS, posts, pagination);
	};
	
	var clearPost = exports.clearPost = function clearPost(_ref2) {
	  var dispatch = _ref2.dispatch;
	
	  dispatch(types.CLEAR_POST);
	};

/***/ },
/* 51 */
/***/ function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	var state = exports.state = {
	  all: [],
	  pagination: {
	    totalCount: 0,
	    totalPages: 0,
	    currentPage: 1,
	    limit: 5
	  }
	};

/***/ },
/* 52 */,
/* 53 */,
/* 54 */,
/* 55 */,
/* 56 */,
/* 57 */,
/* 58 */,
/* 59 */,
/* 60 */,
/* 61 */,
/* 62 */,
/* 63 */,
/* 64 */,
/* 65 */,
/* 66 */
/***/ function(module, exports) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.makeid = makeid;
	exports.csstransitions = csstransitions;
	function makeid() {
	  var text = '';
	  var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	
	  for (var i = 0; i < 5; i++) {
	    text += possible.charAt(Math.floor(Math.random() * possible.length));
	  }
	  return text;
	}
	
	function csstransitions() {
	  var style = document.documentElement.style;
	  return style.webkitTransition !== undefined || style.MozTransition !== undefined || style.OTransition !== undefined || style.MsTransition !== undefined || style.transition !== undefined;
	}
	
	var testSameOrigin = exports.testSameOrigin = function testSameOrigin(url) {
	  var loc = window.location;
	  var a = document.createElement('a');
	  a.href = url;
	  return a.hostname === loc.hostname && a.port === loc.port && a.protocol === loc.protocol;
	};
	
	var trigger = exports.trigger = function trigger(el, event) {
	  var e = document.createEvent('HTMLEvents');
	  e.initEvent(event, true, false);
	};
	
	var changeLocation = exports.changeLocation = function changeLocation(router, link) {
	  if (!link) return;
	  if (router) {
	    router.go(link);
	  } else {
	    window.location.href = link;
	  }
	};

/***/ },
/* 67 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.wizardStep = exports.wizard = undefined;
	
	__webpack_require__(137);
	
	var _wizard = __webpack_require__(145);
	
	var _wizard2 = _interopRequireDefault(_wizard);
	
	var _wizardStep = __webpack_require__(144);
	
	var _wizardStep2 = _interopRequireDefault(_wizardStep);
	
	var _helpers = __webpack_require__(66);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var wizard = exports.wizard = {
	  template: _wizard2.default,
	  replace: true,
	  props: {
	    currentIndex: {
	      type: Number,
	      default: 0
	    }
	  },
	  data: function data() {
	    return {
	      countItems: 0
	    };
	  },
	
	  methods: {
	    changeCurrentIndex: function changeCurrentIndex(index) {
	      if (this.$children[this.currentIndex].disablePrevious && this.currentIndex > index) return false;
	      if (this.$children[index - 1] && this.$children[index - 1].valid || index < this.currentIndex) {
	        this.currentIndex = index;
	        return true;
	      }
	      return false;
	    }
	  },
	  ready: function ready() {
	    this.countItems = this.$children.length;
	
	    this.$children.forEach(function (item, index) {
	      item.index = index;
	    });
	  }
	};
	
	var wizardStep = exports.wizardStep = {
	  template: _wizardStep2.default,
	  replace: true,
	  data: function data() {
	    return {
	      index: null,
	      active: false
	    };
	  },
	
	  computed: {
	    isActive: function isActive() {
	      return this.$parent.currentIndex === this.index;
	    },
	    isPrevious: function isPrevious() {
	      return this.$parent.currentIndex > this.index;
	    },
	    isNext: function isNext() {
	      return this.$parent.currentIndex < this.index;
	    }
	  },
	  props: {
	    link: {
	      type: String,
	      default: ''
	    },
	    icon: {
	      type: String,
	      default: false
	    },
	    iconNumber: {
	      type: String,
	      default: false
	    },
	    title: {
	      type: String,
	      default: false
	    },
	    description: {
	      type: String,
	      default: false
	    },
	    progress: {
	      type: Number,
	      default: 0
	    },
	    valid: {
	      type: Boolean,
	      default: false
	    },
	    disablePrevious: {
	      type: Boolean,
	      default: false
	    }
	  },
	  methods: {
	    changeCurrentIndex: function changeCurrentIndex() {
	      if (this.$parent.changeCurrentIndex(this.index) && this.link) {
	        (0, _helpers.changeLocation)(this.$router, this.link);
	      }
	    }
	  },
	  watch: {
	    progress: function progress(val) {
	      this.progressBar.style.width = val + '%';
	      if (val === 100) {
	        this.valid = true;
	      } else {
	        this.valid = false;
	      }
	    },
	    valid: function valid(val) {
	      if (val) {
	        this.progress = 100;
	      }
	    }
	  },
	  components: {},
	  ready: function ready() {}
	};

/***/ },
/* 68 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.redirects = exports.routes = undefined;
	
	var _loader = __webpack_require__(8);
	
	var _loader2 = _interopRequireDefault(_loader);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var routes = exports.routes = {
	  '/account': {
	    name: 'account.show',
	    component: _loader2.default.page('account', 'show'),
	
	    auth: true
	  },
	
	  '/post': {
	    name: 'post.index',
	    component: _loader2.default.page('post', 'index'),
	
	    auth: true
	  },
	
	  '/post/create': {
	    name: 'post.create',
	    component: _loader2.default.page('post', 'create'),
	
	    auth: true
	  },
	
	  '/login': {
	    name: 'login.index',
	    component: _loader2.default.page('login', 'index'),
	
	    guest: true
	  },
	  '/register': {
	    name: 'register.index',
	    component: _loader2.default.page('register', 'index'),
	    guest: true
	  }
	};
	
	var redirects = exports.redirects = {
	  '/': '/register'
	};

/***/ },
/* 69 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _vue = __webpack_require__(1);
	
	var _vue2 = _interopRequireDefault(_vue);
	
	var _account = __webpack_require__(84);
	
	var _account2 = _interopRequireDefault(_account);
	
	var _store = __webpack_require__(3);
	
	var _store2 = _interopRequireDefault(_store);
	
	var _actions = __webpack_require__(47);
	
	var _actions2 = __webpack_require__(7);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var success = function success(_ref) {
	  var data = _ref.data;
	
	  var account = _account2.default.fetch(data);
	
	  (0, _actions.fetchAccount)(_store2.default, account);
	};
	
	var failed = function failed() {
	  (0, _actions2.addNotification)(_store2.default, {
	    type: 'danger',
	    message: 'Fetching account failed!'
	  });
	};
	
	exports.default = function () {
	  _vue2.default.http.get('account').then(success, failed);
	};

/***/ },
/* 70 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _vue = __webpack_require__(1);
	
	var _vue2 = _interopRequireDefault(_vue);
	
	var _account = __webpack_require__(46);
	
	var _account2 = _interopRequireDefault(_account);
	
	var _post = __webpack_require__(20);
	
	var _post2 = _interopRequireDefault(_post);
	
	var _store = __webpack_require__(3);
	
	var _store2 = _interopRequireDefault(_store);
	
	var _actions = __webpack_require__(7);
	
	var _actions2 = __webpack_require__(49);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var success = function success(_ref) {
	  var data = _ref.data;
	
	  (0, _actions2.login)(_store2.default, data.token);
	  _post2.default.all();
	  _account2.default.find();
	  (0, _actions.addNotification)(_store2.default, {
	    type: 'success',
	    message: 'Login successful!'
	  });
	  window.router.go({
	    name: 'post.index'
	  });
	};
	
	var failed = function failed() {
	  (0, _actions.addNotification)(_store2.default, {
	    type: 'danger',
	    message: 'Login failed!'
	  });
	};
	
	exports.default = function (user) {
	  _vue2.default.http.post('auth', user).then(success, failed);
	};

/***/ },
/* 71 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _store = __webpack_require__(3);
	
	var _store2 = _interopRequireDefault(_store);
	
	var _actions = __webpack_require__(7);
	
	var _actions2 = __webpack_require__(49);
	
	var _actions3 = __webpack_require__(47);
	
	var _actions4 = __webpack_require__(50);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	exports.default = function () {
	  (0, _actions2.logout)(_store2.default);
	  (0, _actions3.clearAccount)(_store2.default);
	  (0, _actions4.clearPost)(_store2.default);
	  (0, _actions.addNotification)(_store2.default, {
	    type: 'success',
	    message: 'Logout successful!'
	  });
	  window.router.go({
	    name: 'login.index'
	  });
	};

/***/ },
/* 72 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _vue = __webpack_require__(1);
	
	var _vue2 = _interopRequireDefault(_vue);
	
	var _all = __webpack_require__(27);
	
	var _all2 = _interopRequireDefault(_all);
	
	var _store = __webpack_require__(3);
	
	var _store2 = _interopRequireDefault(_store);
	
	var _actions = __webpack_require__(7);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var success = function success() {
	  (0, _all2.default)();
	  (0, _actions.addNotification)(_store2.default, {
	    type: 'success',
	    message: 'The post has been deleted!'
	  });
	  window.router.go({
	    name: 'post.index'
	  });
	};
	
	var failed = function failed() {
	  (0, _actions.addNotification)(_store2.default, {
	    type: 'danger',
	    message: 'Deleting post failed!'
	  });
	};
	
	exports.default = function (id) {
	  _vue2.default.http.delete('posts/' + id).then(success, failed);
	};

/***/ },
/* 73 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _vue = __webpack_require__(1);
	
	var _vue2 = _interopRequireDefault(_vue);
	
	var _all = __webpack_require__(27);
	
	var _all2 = _interopRequireDefault(_all);
	
	var _store = __webpack_require__(3);
	
	var _store2 = _interopRequireDefault(_store);
	
	var _actions = __webpack_require__(7);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var success = function success() {
	  (0, _all2.default)();
	  (0, _actions.addNotification)(_store2.default, {
	    type: 'success',
	    message: 'The post has been created!'
	  });
	  window.router.go({
	    name: 'post.index'
	  });
	};
	
	var failed = function failed() {
	  (0, _actions.addNotification)(_store2.default, {
	    type: 'danger',
	    message: 'Saving post failed!'
	  });
	};
	
	exports.default = function (post) {
	  _vue2.default.http.post('posts', post).then(success, failed);
	};

/***/ },
/* 74 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _state = __webpack_require__(48);
	
	var _mutations = __webpack_require__(75);
	
	exports.default = {
	  state: _state.state,
	  mutations: _mutations.mutations
	};

/***/ },
/* 75 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.mutations = undefined;
	
	var _defineProperty2 = __webpack_require__(23);
	
	var _defineProperty3 = _interopRequireDefault(_defineProperty2);
	
	var _mutations;
	
	var _mutationTypes = __webpack_require__(4);
	
	var _state = __webpack_require__(48);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var mutations = exports.mutations = (_mutations = {}, (0, _defineProperty3.default)(_mutations, _mutationTypes.FETCH_ACCOUNT, function (state, account) {
	  state.id = account.id;
	  state.email = account.email;
	  state.name = account.name;
	}), (0, _defineProperty3.default)(_mutations, _mutationTypes.CLEAR_ACCOUNT, function (state) {
	  state.id = _state.state.id;
	  state.email = _state.state.email;
	  state.name = _state.state.name;
	}), _mutations);

/***/ },
/* 76 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _state = __webpack_require__(78);
	
	var _mutations = __webpack_require__(77);
	
	exports.default = {
	  state: _state.state,
	  mutations: _mutations.mutations
	};

/***/ },
/* 77 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.mutations = undefined;
	
	var _defineProperty2 = __webpack_require__(23);
	
	var _defineProperty3 = _interopRequireDefault(_defineProperty2);
	
	var _mutations;
	
	var _vue = __webpack_require__(1);
	
	var _vue2 = _interopRequireDefault(_vue);
	
	var _mutationTypes = __webpack_require__(4);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var mutations = exports.mutations = (_mutations = {}, (0, _defineProperty3.default)(_mutations, _mutationTypes.CHECK_AUTHENTICATION, function (state) {
	  state.authenticated = !!localStorage.getItem('id_token');
	  if (state.authenticated) {
	    _vue2.default.http.headers.common.Authorization = 'Bearer ' + localStorage.getItem('id_token');
	  }
	}), (0, _defineProperty3.default)(_mutations, _mutationTypes.LOGIN, function (state, token) {
	  state.authenticated = true;
	  localStorage.setItem('id_token', token);
	  _vue2.default.http.headers.common.Authorization = 'Bearer ' + token;
	}), (0, _defineProperty3.default)(_mutations, _mutationTypes.LOGOUT, function (state) {
	  state.authenticated = false;
	  localStorage.removeItem('id_token');
	  _vue2.default.http.headers.common.Authorization = null;
	}), _mutations);

/***/ },
/* 78 */
/***/ function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	var state = exports.state = {
	  authenticated: false
	};

/***/ },
/* 79 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _state = __webpack_require__(81);
	
	var _mutations = __webpack_require__(80);
	
	exports.default = {
	  state: _state.state,
	  mutations: _mutations.mutations
	};

/***/ },
/* 80 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.mutations = undefined;
	
	var _defineProperty2 = __webpack_require__(23);
	
	var _defineProperty3 = _interopRequireDefault(_defineProperty2);
	
	var _mutations;
	
	var _uuid = __webpack_require__(140);
	
	var _uuid2 = _interopRequireDefault(_uuid);
	
	var _mutationTypes = __webpack_require__(4);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var mutations = exports.mutations = (_mutations = {}, (0, _defineProperty3.default)(_mutations, _mutationTypes.ADD_NOTIFICATION, function (state, notification) {
	  notification.id = _uuid2.default.v4();
	
	  state.all.push(notification);
	}), (0, _defineProperty3.default)(_mutations, _mutationTypes.DELETE_NOTIFICATION, function (state, id) {
	  state.all = state.all.filter(function (notification) {
	    return notification.id !== id ? notification : undefined;
	  });
	}), _mutations);

/***/ },
/* 81 */
/***/ function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	var state = exports.state = {
	  all: []
	};

/***/ },
/* 82 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _state = __webpack_require__(51);
	
	var _mutations = __webpack_require__(83);
	
	exports.default = {
	  state: _state.state,
	  mutations: _mutations.mutations
	};

/***/ },
/* 83 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.mutations = undefined;
	
	var _defineProperty2 = __webpack_require__(23);
	
	var _defineProperty3 = _interopRequireDefault(_defineProperty2);
	
	var _mutations;
	
	var _state = __webpack_require__(51);
	
	var _mutationTypes = __webpack_require__(4);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var mutations = exports.mutations = (_mutations = {}, (0, _defineProperty3.default)(_mutations, _mutationTypes.FETCH_POSTS, function (state, posts, pagination) {
	  state.all = posts;
	  state.pagination = pagination;
	}), (0, _defineProperty3.default)(_mutations, _mutationTypes.CLEAR_POST, function (state) {
	  state.all = _state.state.all;
	  state.pagination = _state.state.pagination;
	}), _mutations);

/***/ },
/* 84 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _getPrototypeOf = __webpack_require__(29);
	
	var _getPrototypeOf2 = _interopRequireDefault(_getPrototypeOf);
	
	var _classCallCheck2 = __webpack_require__(21);
	
	var _classCallCheck3 = _interopRequireDefault(_classCallCheck2);
	
	var _createClass2 = __webpack_require__(22);
	
	var _createClass3 = _interopRequireDefault(_createClass2);
	
	var _possibleConstructorReturn2 = __webpack_require__(31);
	
	var _possibleConstructorReturn3 = _interopRequireDefault(_possibleConstructorReturn2);
	
	var _inherits2 = __webpack_require__(30);
	
	var _inherits3 = _interopRequireDefault(_inherits2);
	
	var _transformer = __webpack_require__(28);
	
	var _transformer2 = _interopRequireDefault(_transformer);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var AccountTransformer = function (_Transformer) {
	  (0, _inherits3.default)(AccountTransformer, _Transformer);
	
	  function AccountTransformer() {
	    (0, _classCallCheck3.default)(this, AccountTransformer);
	    return (0, _possibleConstructorReturn3.default)(this, (AccountTransformer.__proto__ || (0, _getPrototypeOf2.default)(AccountTransformer)).apply(this, arguments));
	  }
	
	  (0, _createClass3.default)(AccountTransformer, null, [{
	    key: 'fetch',
	    value: function fetch(account) {
	      return {
	        id: account.id,
	        email: account.email,
	        name: account.name
	      };
	    }
	  }, {
	    key: 'send',
	    value: function send(account) {
	      return {
	        id: account.id,
	        email: account.email,
	        name: account.name
	      };
	    }
	  }]);
	  return AccountTransformer;
	}(_transformer2.default);
	
	exports.default = AccountTransformer;

/***/ },
/* 85 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _getPrototypeOf = __webpack_require__(29);
	
	var _getPrototypeOf2 = _interopRequireDefault(_getPrototypeOf);
	
	var _classCallCheck2 = __webpack_require__(21);
	
	var _classCallCheck3 = _interopRequireDefault(_classCallCheck2);
	
	var _createClass2 = __webpack_require__(22);
	
	var _createClass3 = _interopRequireDefault(_createClass2);
	
	var _possibleConstructorReturn2 = __webpack_require__(31);
	
	var _possibleConstructorReturn3 = _interopRequireDefault(_possibleConstructorReturn2);
	
	var _inherits2 = __webpack_require__(30);
	
	var _inherits3 = _interopRequireDefault(_inherits2);
	
	var _transformer = __webpack_require__(28);
	
	var _transformer2 = _interopRequireDefault(_transformer);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var PaginationTransformer = function (_Transformer) {
	  (0, _inherits3.default)(PaginationTransformer, _Transformer);
	
	  function PaginationTransformer() {
	    (0, _classCallCheck3.default)(this, PaginationTransformer);
	    return (0, _possibleConstructorReturn3.default)(this, (PaginationTransformer.__proto__ || (0, _getPrototypeOf2.default)(PaginationTransformer)).apply(this, arguments));
	  }
	
	  (0, _createClass3.default)(PaginationTransformer, null, [{
	    key: 'fetch',
	    value: function fetch(pagination) {
	      return {
	        totalCount: pagination.total_count,
	        totalPages: pagination.total_pages,
	        currentPage: pagination.current_page,
	        limit: pagination.limit
	      };
	    }
	  }, {
	    key: 'send',
	    value: function send(pagination) {
	      return {
	        total_count: pagination.totalCount,
	        total_pages: pagination.totalPages,
	        current_page: pagination.currentPage,
	        limit: pagination.limit
	      };
	    }
	  }]);
	  return PaginationTransformer;
	}(_transformer2.default);
	
	exports.default = PaginationTransformer;

/***/ },
/* 86 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _getPrototypeOf = __webpack_require__(29);
	
	var _getPrototypeOf2 = _interopRequireDefault(_getPrototypeOf);
	
	var _classCallCheck2 = __webpack_require__(21);
	
	var _classCallCheck3 = _interopRequireDefault(_classCallCheck2);
	
	var _createClass2 = __webpack_require__(22);
	
	var _createClass3 = _interopRequireDefault(_createClass2);
	
	var _possibleConstructorReturn2 = __webpack_require__(31);
	
	var _possibleConstructorReturn3 = _interopRequireDefault(_possibleConstructorReturn2);
	
	var _inherits2 = __webpack_require__(30);
	
	var _inherits3 = _interopRequireDefault(_inherits2);
	
	var _transformer = __webpack_require__(28);
	
	var _transformer2 = _interopRequireDefault(_transformer);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var PostTransformer = function (_Transformer) {
	  (0, _inherits3.default)(PostTransformer, _Transformer);
	
	  function PostTransformer() {
	    (0, _classCallCheck3.default)(this, PostTransformer);
	    return (0, _possibleConstructorReturn3.default)(this, (PostTransformer.__proto__ || (0, _getPrototypeOf2.default)(PostTransformer)).apply(this, arguments));
	  }
	
	  (0, _createClass3.default)(PostTransformer, null, [{
	    key: 'fetch',
	    value: function fetch(post) {
	      return {
	        id: post.id,
	        title: post.title,
	        content: post.content
	      };
	    }
	  }, {
	    key: 'send',
	    value: function send(post) {
	      return {
	        id: post.id,
	        title: post.title,
	        content: post.content
	      };
	    }
	  }]);
	  return PostTransformer;
	}(_transformer2.default);
	
	exports.default = PostTransformer;

/***/ },
/* 87 */
/***/ function(module, exports, __webpack_require__) {

	/* WEBPACK VAR INJECTION */(function(process) {'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.router = undefined;
	
	var _vue = __webpack_require__(1);
	
	var _vue2 = _interopRequireDefault(_vue);
	
	var _vueResource = __webpack_require__(163);
	
	var _vueResource2 = _interopRequireDefault(_vueResource);
	
	var _auth = __webpack_require__(19);
	
	var _auth2 = _interopRequireDefault(_auth);
	
	var _vuexRouterSync = __webpack_require__(165);
	
	var _vuexRouterSync2 = _interopRequireDefault(_vuexRouterSync);
	
	var _store = __webpack_require__(3);
	
	var _store2 = _interopRequireDefault(_store);
	
	var _vueRouter = __webpack_require__(164);
	
	var _vueRouter2 = _interopRequireDefault(_vueRouter);
	
	var _router = __webpack_require__(68);
	
	var _jquery = __webpack_require__(138);
	
	var _jquery2 = _interopRequireDefault(_jquery);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	_vue2.default.config.devtools = true;
	
	_vue2.default.use(_vueResource2.default);
	
	_vue2.default.http.headers.common.Accept = 'application/json';
	_vue2.default.http.options.root = process.env.API_LOCATION;
	_vue2.default.http.interceptors.push(function (request, next) {
	  next(function (response) {
	    if (response.status === 401) {
	      _auth2.default.logout();
	    }
	  });
	});
	
	_store2.default.dispatch('CHECK_AUTHENTICATION');
	
	_vue2.default.use(_vueRouter2.default);
	
	var router = new _vueRouter2.default({
	  hashbang: false
	});
	router.map(_router.routes);
	router.redirect(_router.redirects);
	router.beforeEach(function (transition) {
	  if (transition.to.auth && !_store2.default.state.auth.authenticated) {
	    transition.redirect({
	      name: 'login.index'
	    });
	  } else if (transition.to.guest && _store2.default.state.auth.authenticated) {
	    transition.redirect({
	      name: 'account.show'
	    });
	  } else {
	    transition.next();
	  }
	});
	_vuexRouterSync2.default.sync(_store2.default, router);
	
	window.router = router;
	
	window.$ = window.jQuery = _jquery2.default;
	
	exports.router = router;
	/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(45)))

/***/ },
/* 88 */
/***/ function(module, exports) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.default = {
	  props: {
	    style: {
	      type: String,
	      required: false,
	      default: function _default() {
	        return 'primary';
	      }
	    },
	    message: {
	      type: String,
	      required: true
	    },
	    id: {
	      type: String,
	      required: true
	    },
	    closeFunction: {
	      type: Function,
	      required: true
	    }
	  },
	
	  methods: {
	    startTimer: function startTimer() {
	      var _this = this;
	
	      setTimeout(function () {
	        _this.closeFunction(_this.id);
	      }, 5000);
	    }
	  },
	
	  computed: {
	    classNames: function classNames() {
	      var classNames = ['alert'];
	
	      classNames.push('alert-' + this.style);
	
	      return classNames;
	    }
	  },
	
	  ready: function ready() {
	    this.startTimer();
	  }
	};

/***/ },
/* 89 */
/***/ function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.default = {
	  props: {
	    switchFunction: {
	      type: Function,
	      required: true
	    },
	    pagination: {
	      type: Object,
	      required: true
	    }
	  },
	
	  computed: {
	    previousDisabled: function previousDisabled() {
	      return this.pagination.currentPage <= 1;
	    },
	    nextDisabled: function nextDisabled() {
	      return this.pagination.currentPage >= this.pagination.totalPages;
	    }
	  },
	
	  methods: {
	    goToPage: function goToPage(page) {
	      this.switchFunction(page, this.pagination.limit);
	    },
	    previousPage: function previousPage() {
	      if (!this.previousDisabled) {
	        this.goToPage(this.pagination.currentPage - 1);
	      }
	    },
	    nextPage: function nextPage() {
	      if (!this.nextDisabled) {
	        this.goToPage(this.pagination.currentPage + 1);
	      }
	    }
	  }
	};

/***/ },
/* 90 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _auth = __webpack_require__(19);
	
	var _auth2 = _interopRequireDefault(_auth);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	exports.default = {
	  methods: {
	    logout: function logout() {
	      _auth2.default.logout();
	    }
	  }
	};

/***/ },
/* 91 */
/***/ function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.default = {};

/***/ },
/* 92 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _loader = __webpack_require__(8);
	
	var _loader2 = _interopRequireDefault(_loader);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	exports.default = {
	  vuex: {
	    getters: {
	      account: function account(_ref) {
	        var _account = _ref.account;
	        return _account;
	      }
	    }
	  },
	
	  components: {
	    VLayout: _loader2.default.layout('default')
	  }
	};

/***/ },
/* 93 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _auth = __webpack_require__(19);
	
	var _auth2 = _interopRequireDefault(_auth);
	
	var _loader = __webpack_require__(8);
	
	var _loader2 = _interopRequireDefault(_loader);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	exports.default = {
	  data: function data() {
	    return {
	      user: {
	        email: null,
	        password: null
	      }
	    };
	  },
	
	
	  methods: {
	    login: function login() {
	      _auth2.default.login(this.user);
	    }
	  },
	
	  components: {
	    VLayout: _loader2.default.layout('minimal')
	  }
	};

/***/ },
/* 94 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _post = __webpack_require__(20);
	
	var _post2 = _interopRequireDefault(_post);
	
	var _loader = __webpack_require__(8);
	
	var _loader2 = _interopRequireDefault(_loader);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	exports.default = {
	  data: function data() {
	    return {
	      post: {
	        title: '',
	        content: ''
	      }
	    };
	  },
	
	
	  methods: {
	    store: function store() {
	      _post2.default.store(this.post);
	    }
	  },
	
	  components: {
	    VLayout: _loader2.default.layout('default')
	  }
	};

/***/ },
/* 95 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _loader = __webpack_require__(8);
	
	var _loader2 = _interopRequireDefault(_loader);
	
	var _post = __webpack_require__(20);
	
	var _post2 = _interopRequireDefault(_post);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	exports.default = {
	  vuex: {
	    getters: {
	      posts: function posts(_ref) {
	        var post = _ref.post;
	        return post.all;
	      },
	      pagination: function pagination(_ref2) {
	        var post = _ref2.post;
	        return post.pagination;
	      }
	    }
	  },
	
	  computed: {
	    limit: {
	      get: function get() {
	        return this.pagination.limit;
	      },
	      set: function set(val) {
	        _post2.default.all(1, val);
	      }
	    }
	  },
	
	  methods: {
	    all: function all(page, limit) {
	      return _post2.default.all(page, limit);
	    },
	    destroy: function destroy(id) {
	      return _post2.default.destroy(id);
	    }
	  },
	
	  components: {
	    VLayout: _loader2.default.layout('default'),
	    VPagination: _loader2.default.component('pagination')
	  }
	};

/***/ },
/* 96 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	    value: true
	});
	
	var _auth = __webpack_require__(19);
	
	var _auth2 = _interopRequireDefault(_auth);
	
	var _loader = __webpack_require__(8);
	
	var _loader2 = _interopRequireDefault(_loader);
	
	var _wizard = __webpack_require__(67);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	exports.default = {
	    data: function data() {
	        return {
	            user: {
	                type: null,
	                email: null,
	                password: null
	            },
	            progress: {
	                step1: 0,
	                step2: 0,
	                step3: 0
	            },
	            currentStep: 0,
	            list: [{ text: 'Requester Details', href: '/requester', description: 'Your details' }, { text: 'First Collection', href: '/first-collection', description: 'The first collection of data' }, { text: 'Second Collection', href: '/second-collection', description: 'The second collection of data' }, { text: 'Payment', href: '/payment', description: 'Payment options' }, { text: 'Confirmation', href: '/confirmation', description: 'Confirm the cleanse' }]
	        };
	    },
	
	
	    methods: {
	        login: function login() {
	            _auth2.default.login(this.user);
	        }
	    },
	
	    components: {
	        VLayout: _loader2.default.layout('minimal'),
	        vsWizard: _wizard.wizard,
	        vsWizardStep: _wizard.wizardStep
	    },
	
	    watch: {
	        models: {
	            handler: function handler() {
	                if (this.currentStep === 0) {
	                    this.progress.step1 = 0;
	                    console.log(this.user.type);
	                    if (this.user.type.checked) {
	                        this.progress.step1 = 100;
	                    }
	                }
	
	                if (this.currentStep === 1) {
	                    this.progress.step2 = 0;
	                    if (this.models.cardType.length) {
	                        this.progress.step2 += 100 / 3;
	                    }
	                    if (this.models.cardNumber.length) {
	                        this.progress.step2 += 100 / 3;
	                    }
	                    if (this.models.cardHolder.length) {
	                        this.progress.step2 += 100 / 3;
	                    }
	                }
	            },
	
	            deep: true
	        }
	    }
	};

/***/ },
/* 97 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	
	var _store = __webpack_require__(3);
	
	var _store2 = _interopRequireDefault(_store);
	
	var _actions = __webpack_require__(7);
	
	var _loader = __webpack_require__(8);
	
	var _loader2 = _interopRequireDefault(_loader);
	
	var _post = __webpack_require__(20);
	
	var _post2 = _interopRequireDefault(_post);
	
	var _account = __webpack_require__(46);
	
	var _account2 = _interopRequireDefault(_account);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	exports.default = {
	  store: _store2.default,
	
	  vuex: {
	    getters: {
	      authenticated: function authenticated(_ref) {
	        var auth = _ref.auth;
	        return auth.authenticated;
	      },
	      notifications: function notifications(_ref2) {
	        var notification = _ref2.notification;
	        return notification.all;
	      }
	    },
	    actions: {
	      deleteNotification: _actions.deleteNotification
	    }
	  },
	
	  ready: function ready() {
	    if (this.authenticated) {
	      _post2.default.all();
	      _account2.default.find();
	    }
	  },
	
	  components: {
	    alert: _loader2.default.component('alert')
	  }
	};

/***/ },
/* 98 */,
/* 99 */,
/* 100 */,
/* 101 */,
/* 102 */,
/* 103 */,
/* 104 */,
/* 105 */,
/* 106 */,
/* 107 */,
/* 108 */,
/* 109 */,
/* 110 */,
/* 111 */,
/* 112 */,
/* 113 */,
/* 114 */,
/* 115 */,
/* 116 */,
/* 117 */,
/* 118 */,
/* 119 */,
/* 120 */,
/* 121 */,
/* 122 */,
/* 123 */,
/* 124 */,
/* 125 */,
/* 126 */,
/* 127 */,
/* 128 */,
/* 129 */,
/* 130 */,
/* 131 */,
/* 132 */,
/* 133 */,
/* 134 */,
/* 135 */,
/* 136 */,
/* 137 */
/***/ function(module, exports) {

	// removed by extract-text-webpack-plugin

/***/ },
/* 138 */,
/* 139 */,
/* 140 */,
/* 141 */
/***/ function(module, exports) {

	module.exports = "\n<div>\n  <router-view></router-view>\n  <div\n    class=\"notification-wrapper\"\n  >\n    <div class=\"container\">\n      <div class=\"row\">\n        <div class=\"col-md-3 pull-right\">\n          <alert\n            v-for=\"notification in notifications\"\n            :style=\"notification.type\"\n            :message=\"notification.message\"\n            :id=\"notification.id\"\n            :close-function=\"deleteNotification\"\n          ></alert>\n        </div>\n      </div>\n    </div>\n  </div>\n</div>\n";

/***/ },
/* 142 */
/***/ function(module, exports) {

	module.exports = "<div\n  :class=\"classNames\"\n>\n  <button type=\"button\"\n          class=\"close\"\n          @click.prevent=\"closeFunction(id)\"\n  >\n    <span aria-hidden=\"true\">&times;</span>\n  </button>\n  {{message}}\n</div>\n";

/***/ },
/* 143 */
/***/ function(module, exports) {

	module.exports = "<nav>\n  <ul class=\"pagination no-margin\">\n    <li\n      :class=\"{'disabled' : this.previousDisabled }\"\n    >\n      <a\n        href=\"#\"\n        @click.prevent=\"previousPage\"\n      >\n        <span>&laquo;</span>\n      </a>\n    </li>\n    <li\n      v-for=\"page in pagination.totalPages\"\n      :class=\"{'active': $index + 1 === pagination.currentPage}\"\n    >\n      <a href=\"#\"\n         @click.prevent=\"goToPage($index + 1)\"\n      >{{$index + 1}}</a>\n    </li>\n    <li\n      :class=\"{'disabled' : this.nextDisabled }\"\n    >\n      <a\n        href=\"#\"\n        @click.prevent=\"nextPage\"\n      >\n        <span>&raquo;</span>\n      </a>\n    </li>\n  </ul>\n</nav>\n";

/***/ },
/* 144 */
/***/ function(module, exports) {

	module.exports = "\t<div class=\"wizard-progress\">\n\t\t<div class=\"wizard-progress-value\"></div>\n\t</div>\n\n\t<div class=\"col-cell cell-icon pr-15 hidden-sms hidden-xs\" v-bind:class=\"{'text-muted': isNext}\">\n\t\t<i class=\"zmdi zmdi-n-{{index+1}}-square\"></i>\n\t</div>\n\n\t<div class=\"col-cell text-400 hidden-sms hidden-xs\">{{title}}</div>\n\n\t<div class=\"col-cell pl-20 pr-20 hidden-sms hidden-xs\">\n\t\t<i class=\"zmdi zmdi-chevron-right\"></i>\n\t</div>";

/***/ },
/* 145 */
/***/ function(module, exports) {

	module.exports = "<nav class=\"progress bg-0 pt-20 pb-20\">\n   <div class=\"container\">\n      <div class=\"text-500 ma-0\" style=\"display: table;\">\n         <div class=\"col-cell text-500 text-muted hidden-sms hidden-xs pr-30\">Pendaftaran Baru</div>\n         <slot></slot>\n      </div>\n   </div>\n</nav>\n<hr class=\"ma-0\">";

/***/ },
/* 146 */
/***/ function(module, exports) {

	module.exports = "<div>\n  <nav class=\"navbar navbar-default\">\n    <div class=\"container\">\n      <div class=\"navbar-header\">\n        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar\">\n          <span class=\"sr-only\">Toggle navigation</span>\n          <span class=\"icon-bar\"></span>\n          <span class=\"icon-bar\"></span>\n          <span class=\"icon-bar\"></span>\n        </button>\n        <a class=\"navbar-brand\" v-link=\"{name: 'post.index'}\">Login </a>\n      </div>\n\n      <div class=\"collapse navbar-collapse\" id=\"navbar\">\n        <ul class=\"nav navbar-nav\">\n          <li class=\"nav-item\">\n            <a class=\"nav-link\" v-link=\"{ name: 'post.index' }\">Posts</a>\n          </li>\n          <li class=\"nav-item\">\n            <a class=\"nav-link\" v-link=\"{ name: 'account.show' }\">Account</a>\n          </li>\n        </ul>\n        <ul class=\"nav navbar-nav navbar-right\">\n          <li><a href=\"#\" @click.prevent=\"logout\"><i class=\"glyphicon glyphicon-log-out\"></i></a></li>\n        </ul>\n      </div>\n    </div>\n  </nav>\n\n  <div class=\"container\">\n    <div class=\"row\">\n      <div class=\"col-md-12\">\n        <slot></slot>\n      </div>\n    </div>\n  </div>\n\n</div>";

/***/ },
/* 147 */
/***/ function(module, exports) {

	module.exports = "<nav class=\"toolbar navbar navbar-default no-radius\">\n    <div class=\"container\">\n        <div class=\"navbar-header\">\n            <button class=\"navbar-toggle pull-left visible-xs visible-sm\">\n                <i class=\"zmdi zmdi-menu\"></i>\n            </button>\n            <a class=\"navbar-brand\" href=\"index.php\">\n                <img src=\"$assets/static/img/logo-llm-white.svg\" height=\"100%\">\n                <span>Lembaga Lebuhraya Malaysia</span>\n            </a>\n        </div>\n        <div class=\"navbar-collapse hidden-xs hidden-sm\">\n\n            <ul class=\"navbar-right navbar-nav nav hidden-xs hidden-sm\">\n                <li>\n                    <a href=\"index.php\">\n                        <b class=\"col-cell cell-icon text-center\">\n                            <i class=\"zmdi zmdi-sign-in\"></i>\n                        </b>\n                        <b class=\"col-cell cell-name pl-10\">\n                            Akses Masuk\n                        </b>\n                    </a>\n                </li>\n            </ul>\n        </div>\n    </div>\n</nav>\n\n<slot></slot>";

/***/ },
/* 148 */
/***/ function(module, exports) {

	module.exports = "<v-layout>\n  <div class=\"panel panel-primary\">\n    <div class=\"panel-heading\">\n      <h1 class=\"panel-title\">\n        My Account\n      </h1>\n    </div>\n    <div class=\"panel-body\">\n      <table class=\"table table-striped\">\n        <thead>\n        <tr>\n          <th>\n            Name\n          </th>\n          <th>\n            Email\n          </th>\n        </tr>\n        </thead>\n        <tbody>\n        <tr>\n          <td>\n            {{account.name}}\n          </td>\n          <td>\n            {{account.email}}\n          </td>\n        </tr>\n        </tbody>\n      </table>\n    </div>\n  </div>\n</v-layout>\n";

/***/ },
/* 149 */
/***/ function(module, exports) {

	module.exports = "<v-layout>\n  <div class=\"panel panel-primary\">\n    <div class=\"panel-heading\">\n      <h1 class=\"panel-title\">\n        Login\n      </h1>\n    </div>\n    <div class=\"panel-body\">\n      <form @submit.prevent=\"login\">\n        <div class=\"form-group\">\n          <div class=\"input-group\">\n            <div class=\"input-group-addon\">\n              <i class=\"glyphicon glyphicon-envelope\"></i>\n            </div>\n            <input\n              v-model=\"user.email\"\n              type=\"email\"\n              placeholder=\"Email\"\n              class=\"form-control\"\n            >\n          </div>\n        </div>\n        <div class=\"form-group\">\n          <div class=\"input-group\">\n            <div class=\"input-group-addon\">\n              <i class=\"glyphicon glyphicon-lock\"></i>\n            </div>\n            <input\n              v-model=\"user.password\"\n              type=\"password\"\n              placeholder=\"Password\"\n              class=\"form-control\"\n            >\n          </div>\n        </div>\n        <div class=\"form-group\">\n          <button class=\"btn btn-primary\">\n            Login\n          </button>\n        </div>\n      </form>\n    </div>\n  </div>\n</v-layout>\n";

/***/ },
/* 150 */
/***/ function(module, exports) {

	module.exports = "<v-layout>\n  <div class=\"panel panel-primary\">\n    <div class=\"panel-heading\">\n      <h1 class=\"panel-title\">\n        Create Post\n      </h1>\n    </div>\n    <div class=\"panel-body\">\n      <form\n        class=\"form-horizontal\"\n        @submit.prevent=\"store\"\n      >\n        <div class=\"form-group\">\n          <label\n            for=\"title\"\n            class=\"col-sm-2 control-label\"\n          >\n            Title\n          </label>\n          <div class=\"col-sm-10\">\n            <input\n              id=\"title\"\n              class=\"form-control\"\n              placeholder=\"Title\"\n              v-model=\"post.title\"\n              type=\"text\"\n            >\n          </div>\n        </div>\n        <div class=\"form-group\">\n          <label\n            for=\"content\"\n            class=\"col-sm-2 control-label\"\n          >\n            Content\n          </label>\n          <div class=\"col-sm-10\">\n            <textarea\n              id=\"content\"\n              class=\"form-control\"\n              placeholder=\"Content\"\n              v-model=\"post.content\"\n            ></textarea>\n          </div>\n        </div>\n        <div class=\"form-group\">\n          <div class=\"col-sm-offset-2 col-sm-10\">\n            <button class=\"btn btn-primary\">\n              <span class=\"glyphicon glyphicon-floppy-save\" aria-hidden=\"true\"></span> Save\n            </button>\n            <a class=\"btn btn-danger\" v-link=\"{name: 'post.index'}\">\n              <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> Cancel\n            </a>\n          </div>\n        </div>\n      </form>\n    </div>\n  </div>\n</v-layout>\n";

/***/ },
/* 151 */
/***/ function(module, exports) {

	module.exports = "<v-layout>\n  <div class=\"pull-right\">\n    <a class=\"btn btn-primary\" v-link=\"{name: 'post.create'}\">\n      Create Post\n    </a>\n  </div>\n  <div class=\"clearfix\"></div>\n  <br/>\n  <div class=\"panel panel-primary\">\n    <div class=\"panel-heading\">\n      <h1 class=\"panel-title\">\n        Posts\n      </h1>\n    </div>\n    <div class=\"panel-body\">\n      <table class=\"table table-striped\">\n        <thead>\n        <tr>\n          <th>\n            Id\n          </th>\n          <th>\n            Title\n          </th>\n          <th>\n            Content\n          </th>\n          <th>\n            Actions\n          </th>\n        </tr>\n        </thead>\n        <tbody>\n        <tr v-if=\"posts.length === 0\">\n          <td colspan=\"4\">No posts</td>\n        </tr>\n        <tr v-for=\"post in posts\">\n          <td>\n            {{post.id}}\n          </td>\n          <td>\n            {{post.title}}\n          </td>\n          <td>\n            {{post.content}}\n          </td>\n          <td>\n            <a class=\"btn btn-danger\" @click.prevent=\"destroy(post.id)\">\n              <i class=\"glyphicon glyphicon-trash\"></i>\n            </a>\n          </td>\n        </tr>\n        </tbody>\n      </table>\n      <div class=\"row\">\n        <div class=\"col-md-10\">\n          <v-pagination\n            :pagination=\"pagination\"\n            :switch-function=\"all\"\n          ></v-pagination>\n        </div>\n        <div class=\"col-md-2\">\n          <select\n            class=\"form-control\"\n            v-model=\"limit\"\n          >\n            <option>5</option>\n            <option>10</option>\n            <option>15</option>\n          </select>\n        </div>\n      </div>\n    </div>\n  </div>\n</v-layout>\n";

/***/ },
/* 152 */
/***/ function(module, exports) {

	module.exports = "<v-layout>\r\n    <vs-wizard :current-index.sync=\"currentStep\">\r\n        <vs-wizard-step\r\n                title=\"Kategori Kontraktor\"\r\n                :progress=\"progress.step1\">\r\n        </vs-wizard-step>\r\n        <vs-wizard-step\r\n                title=\"Maklumat Kontraktor\t\"\r\n                :progress=\"progress.step2\">\r\n        </vs-wizard-step>\r\n        <vs-wizard-step\r\n                title=\"Pengesahan\"\r\n                :progress=\"progress.step3\"\r\n                :disable-previous=\"true\">\r\n        </vs-wizard-step>\r\n    </vs-wizard>\r\n\r\n    <div class=\"content\" v-if=\"currentStep == 0\">\r\n        <div class=\"container mt-30 mb-30\">\r\n            <div class=\"row row-10\">\r\n                <div class=\"column col-sm-9\">\r\n                    <div class=\"mb-30\">Pilih kategori pendaftaran yang berkenaan.</div>\r\n\r\n                    <div class=\"row row-10\">\r\n                        <div class=\"column col-xs-6 col-sm-3\">\r\n                            <label for=\"type-0\" class=\"panel panel-link text-center\" style=\"display: block;\">\r\n                                <input type=\"radio\" value=\"0\" id=\"type-0\" v-model=\"user.type\" class=\"invisible\">\r\n                                <div class=\"pa-20\">\r\n                                    <i class=\"zmdi zmdi-account-box\" style=\"font-size: 64px;\"></i>\r\n                                </div>\r\n                                <hr class=\"hr-muted ma-0\">\r\n                                <div class=\"panel-foot text-500 pa-20 pt-15 pb-15\">Syarikat / Syarikat Konsesi</div>\r\n                            </label>\r\n                        </div>\r\n\r\n                        <div class=\"column col-xs-6 col-sm-3\">\r\n                            <label for=\"type-1\" class=\"panel panel-link text-center\" style=\"display: block;\">\r\n                                <input type=\"radio\" value=\"1\" id=\"type-1\" v-model=\"user.type\" class=\"invisible\">\r\n                                <div class=\"pa-20\">\r\n                                    <i class=\"zmdi zmdi-account-box-o\" style=\"font-size: 64px;\"></i>\r\n                                </div>\r\n                                <hr class=\"hr-muted ma-0\">\r\n                                <div class=\"panel-foot text-500 pa-20 pt-15 pb-15\">Individu</div>\r\n                            </label>\r\n                        </div>\r\n\r\n                        <div class=\"column col-xs-6 col-sm-3\">\r\n                            <label for=\"type-2\" class=\"panel panel-link text-center\" style=\"display: block;\">\r\n                                <input type=\"radio\" value=\"2\" id=\"type-2\" v-model=\"user.type\" class=\"invisible\">\r\n                                <div class=\"pa-20\">\r\n                                    <i class=\"zmdi zmdi-account-box\" style=\"font-size: 64px;\"></i>\r\n                                </div>\r\n                                <hr class=\"hr-muted ma-0\">\r\n                                <div class=\"panel-foot text-500 pa-20 pt-15 pb-15\">Badan Kerajaan</div>\r\n                            </label>\r\n                        </div>\r\n\r\n                        <div class=\"column col-xs-6 col-sm-3\">\r\n                            <label for=\"type-3\" class=\"panel panel-link text-center\" style=\"display: block;\">\r\n                                <input type=\"radio\" value=\"3\" id=\"type-3\" v-model=\"user.type\" class=\"invisible\">\r\n                                <div class=\"pa-20\">\r\n                                    <i class=\"zmdi zmdi-account-box-o\" style=\"font-size: 64px;\"></i>\r\n                                </div>\r\n                                <hr class=\"hr-muted ma-0\">\r\n                                <div class=\"panel-foot text-500 pa-20 pt-15 pb-15\">Syarikat Berkaitan Kerajaan (GLC)</div>\r\n                            </label>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n\r\n    <form class=\"m-b row clearfix\" v-if=\"currentStep == 1\">\r\n        <div class=\"col-xs-12 col-md-8 col-md-offset-2\">\r\n            <fieldset class=\"form-group\">\r\n                <label for=\"cardType\">Card Type</label>\r\n                <input autocomplete=\"off\" type=\"text\" class=\"form-control\" id=\"cardType\" placeholder=\"e.g. Visa\"\r\n                       v-model=\"models.cardType\">\r\n            </fieldset>\r\n            <fieldset class=\"form-group\">\r\n                <label for=\"cardNumber\">Card Number</label>\r\n                <input autocomplete=\"off\" type=\"text\" class=\"form-control\" id=\"cardNumber\"\r\n                       placeholder=\"4141 4141 4141 4141\" v-model=\"models.cardNumber\">\r\n            </fieldset>\r\n            <fieldset class=\"form-group\">\r\n                <label for=\"cardHolder\">Card Holder Name</label>\r\n                <input autocomplete=\"off\" type=\"text\" class=\"form-control\" id=\"cardHolder\" placeholder=\"e.g. Joe Doe\"\r\n                       v-model=\"models.cardHolder\">\r\n            </fieldset>\r\n            <div class=\"row\">\r\n                <fieldset class=\"form-group col-xs-6\">\r\n                    <label for=\"cardExpiryMonth\">Expiry Month</label>\r\n                    <input autocomplete=\"off\" type=\"text\" class=\"form-control\" id=\"cardExpiryMonth\"\r\n                           placeholder=\"e.g. Joe Doe\" v-model=\"models.cardExpiryMonth\">\r\n                </fieldset>\r\n                <fieldset class=\"form-group col-xs-6\">\r\n                    <label for=\"cardExpiryMonth\">Expiry Year</label>\r\n                    <input autocomplete=\"off\" type=\"text\" class=\"form-control\" id=\"cardExpiryYear\"\r\n                           placeholder=\"e.g. Joe Doe\" v-model=\"models.cardExpiryYear\">\r\n                </fieldset>\r\n            </div>\r\n            <button class=\"btn btn-default pull-right\" v-bind:disabled=\"progress.step2 < 100\"\r\n                    v-on:click.prevent=\"currentStep++\">Next\r\n            </button>\r\n        </div>\r\n    </form>\r\n    <div class=\"content\" v-if=\"currentStep == 2\">\r\n        <div class=\"container mt-30 mb-30\">\r\n            <div class=\"row row-10\">\r\n                <div class=\"column col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3\">\r\n                    <div class=\"panel\">\r\n                        <div class=\"pa-20\">\r\n                            Satu emel untuk pengesahan akaun telah dihantar ke alamat emel berikut:\r\n\r\n                            <div class=\"mt-20 mb-20 text-500 bg-1 pa-15 text-center\">\r\n                                <i class=\"zmdi zmdi-email text-muted mr-10\"></i>\r\n                                {{email}}\r\n                            </div>\r\n\r\n                            Sila klik pautan yang diberi untuk pengesahan akaun anda.\r\n                        </div>\r\n\r\n                        <hr class=\"hr-muted ma-0\">\r\n\r\n                        <div class=\"pa-20\">\r\n                            <a href=\"#\">Klik disini untuk penghantaran semula</a>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</v-layout>\r\n";

/***/ },
/* 153 */
/***/ function(module, exports, __webpack_require__) {

	var __vue_script__, __vue_template__
	__vue_script__ = __webpack_require__(88)
	if (__vue_script__ &&
	    __vue_script__.__esModule &&
	    Object.keys(__vue_script__).length > 1) {
	  console.warn("[vue-loader] src\\app\\components\\alert\\alert.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(142)
	module.exports = __vue_script__ || {}
	if (module.exports.__esModule) module.exports = module.exports.default
	if (__vue_template__) {
	(typeof module.exports === "function" ? (module.exports.options || (module.exports.options = {})) : module.exports).template = __vue_template__
	}
	if (true) {(function () {  module.hot.accept()
	  var hotAPI = __webpack_require__(2)
	  hotAPI.install(__webpack_require__(1), false)
	  if (!hotAPI.compatible) return
	  var id = "./alert.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ },
/* 154 */
/***/ function(module, exports, __webpack_require__) {

	var __vue_script__, __vue_template__
	__vue_script__ = __webpack_require__(89)
	if (__vue_script__ &&
	    __vue_script__.__esModule &&
	    Object.keys(__vue_script__).length > 1) {
	  console.warn("[vue-loader] src\\app\\components\\pagination\\pagination.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(143)
	module.exports = __vue_script__ || {}
	if (module.exports.__esModule) module.exports = module.exports.default
	if (__vue_template__) {
	(typeof module.exports === "function" ? (module.exports.options || (module.exports.options = {})) : module.exports).template = __vue_template__
	}
	if (true) {(function () {  module.hot.accept()
	  var hotAPI = __webpack_require__(2)
	  hotAPI.install(__webpack_require__(1), false)
	  if (!hotAPI.compatible) return
	  var id = "./pagination.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ },
/* 155 */
/***/ function(module, exports, __webpack_require__) {

	var __vue_script__, __vue_template__
	__vue_script__ = __webpack_require__(97)
	if (__vue_script__ &&
	    __vue_script__.__esModule &&
	    Object.keys(__vue_script__).length > 1) {
	  console.warn("[vue-loader] src\\app\\index.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(141)
	module.exports = __vue_script__ || {}
	if (module.exports.__esModule) module.exports = module.exports.default
	if (__vue_template__) {
	(typeof module.exports === "function" ? (module.exports.options || (module.exports.options = {})) : module.exports).template = __vue_template__
	}
	if (true) {(function () {  module.hot.accept()
	  var hotAPI = __webpack_require__(2)
	  hotAPI.install(__webpack_require__(1), false)
	  if (!hotAPI.compatible) return
	  var id = "./index.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ },
/* 156 */
/***/ function(module, exports, __webpack_require__) {

	var __vue_script__, __vue_template__
	__vue_script__ = __webpack_require__(90)
	if (__vue_script__ &&
	    __vue_script__.__esModule &&
	    Object.keys(__vue_script__).length > 1) {
	  console.warn("[vue-loader] src\\app\\layouts\\default\\default.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(146)
	module.exports = __vue_script__ || {}
	if (module.exports.__esModule) module.exports = module.exports.default
	if (__vue_template__) {
	(typeof module.exports === "function" ? (module.exports.options || (module.exports.options = {})) : module.exports).template = __vue_template__
	}
	if (true) {(function () {  module.hot.accept()
	  var hotAPI = __webpack_require__(2)
	  hotAPI.install(__webpack_require__(1), false)
	  if (!hotAPI.compatible) return
	  var id = "./default.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ },
/* 157 */
/***/ function(module, exports, __webpack_require__) {

	var __vue_script__, __vue_template__
	__vue_script__ = __webpack_require__(91)
	if (__vue_script__ &&
	    __vue_script__.__esModule &&
	    Object.keys(__vue_script__).length > 1) {
	  console.warn("[vue-loader] src\\app\\layouts\\minimal\\minimal.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(147)
	module.exports = __vue_script__ || {}
	if (module.exports.__esModule) module.exports = module.exports.default
	if (__vue_template__) {
	(typeof module.exports === "function" ? (module.exports.options || (module.exports.options = {})) : module.exports).template = __vue_template__
	}
	if (true) {(function () {  module.hot.accept()
	  var hotAPI = __webpack_require__(2)
	  hotAPI.install(__webpack_require__(1), false)
	  if (!hotAPI.compatible) return
	  var id = "./minimal.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ },
/* 158 */
/***/ function(module, exports, __webpack_require__) {

	var __vue_script__, __vue_template__
	__vue_script__ = __webpack_require__(92)
	if (__vue_script__ &&
	    __vue_script__.__esModule &&
	    Object.keys(__vue_script__).length > 1) {
	  console.warn("[vue-loader] src\\app\\pages\\account\\show\\show.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(148)
	module.exports = __vue_script__ || {}
	if (module.exports.__esModule) module.exports = module.exports.default
	if (__vue_template__) {
	(typeof module.exports === "function" ? (module.exports.options || (module.exports.options = {})) : module.exports).template = __vue_template__
	}
	if (true) {(function () {  module.hot.accept()
	  var hotAPI = __webpack_require__(2)
	  hotAPI.install(__webpack_require__(1), false)
	  if (!hotAPI.compatible) return
	  var id = "./show.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ },
/* 159 */
/***/ function(module, exports, __webpack_require__) {

	var __vue_script__, __vue_template__
	__vue_script__ = __webpack_require__(93)
	if (__vue_script__ &&
	    __vue_script__.__esModule &&
	    Object.keys(__vue_script__).length > 1) {
	  console.warn("[vue-loader] src\\app\\pages\\login\\index\\index.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(149)
	module.exports = __vue_script__ || {}
	if (module.exports.__esModule) module.exports = module.exports.default
	if (__vue_template__) {
	(typeof module.exports === "function" ? (module.exports.options || (module.exports.options = {})) : module.exports).template = __vue_template__
	}
	if (true) {(function () {  module.hot.accept()
	  var hotAPI = __webpack_require__(2)
	  hotAPI.install(__webpack_require__(1), false)
	  if (!hotAPI.compatible) return
	  var id = "./index.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ },
/* 160 */
/***/ function(module, exports, __webpack_require__) {

	var __vue_script__, __vue_template__
	__vue_script__ = __webpack_require__(94)
	if (__vue_script__ &&
	    __vue_script__.__esModule &&
	    Object.keys(__vue_script__).length > 1) {
	  console.warn("[vue-loader] src\\app\\pages\\post\\create\\create.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(150)
	module.exports = __vue_script__ || {}
	if (module.exports.__esModule) module.exports = module.exports.default
	if (__vue_template__) {
	(typeof module.exports === "function" ? (module.exports.options || (module.exports.options = {})) : module.exports).template = __vue_template__
	}
	if (true) {(function () {  module.hot.accept()
	  var hotAPI = __webpack_require__(2)
	  hotAPI.install(__webpack_require__(1), false)
	  if (!hotAPI.compatible) return
	  var id = "./create.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ },
/* 161 */
/***/ function(module, exports, __webpack_require__) {

	var __vue_script__, __vue_template__
	__vue_script__ = __webpack_require__(95)
	if (__vue_script__ &&
	    __vue_script__.__esModule &&
	    Object.keys(__vue_script__).length > 1) {
	  console.warn("[vue-loader] src\\app\\pages\\post\\index\\index.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(151)
	module.exports = __vue_script__ || {}
	if (module.exports.__esModule) module.exports = module.exports.default
	if (__vue_template__) {
	(typeof module.exports === "function" ? (module.exports.options || (module.exports.options = {})) : module.exports).template = __vue_template__
	}
	if (true) {(function () {  module.hot.accept()
	  var hotAPI = __webpack_require__(2)
	  hotAPI.install(__webpack_require__(1), false)
	  if (!hotAPI.compatible) return
	  var id = "./index.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ },
/* 162 */
/***/ function(module, exports, __webpack_require__) {

	var __vue_script__, __vue_template__
	__vue_script__ = __webpack_require__(96)
	if (__vue_script__ &&
	    __vue_script__.__esModule &&
	    Object.keys(__vue_script__).length > 1) {
	  console.warn("[vue-loader] src\\app\\pages\\register\\index\\index.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(152)
	module.exports = __vue_script__ || {}
	if (module.exports.__esModule) module.exports = module.exports.default
	if (__vue_template__) {
	(typeof module.exports === "function" ? (module.exports.options || (module.exports.options = {})) : module.exports).template = __vue_template__
	}
	if (true) {(function () {  module.hot.accept()
	  var hotAPI = __webpack_require__(2)
	  hotAPI.install(__webpack_require__(1), false)
	  if (!hotAPI.compatible) return
	  var id = "./index.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ },
/* 163 */,
/* 164 */,
/* 165 */,
/* 166 */,
/* 167 */,
/* 168 */
/***/ function(module, exports, __webpack_require__) {

	var map = {
		"./alert/alert.vue": 153,
		"./pagination/pagination.vue": 154
	};
	function webpackContext(req) {
		return __webpack_require__(webpackContextResolve(req));
	};
	function webpackContextResolve(req) {
		return map[req] || (function() { throw new Error("Cannot find module '" + req + "'.") }());
	};
	webpackContext.keys = function webpackContextKeys() {
		return Object.keys(map);
	};
	webpackContext.resolve = webpackContextResolve;
	module.exports = webpackContext;
	webpackContext.id = 168;


/***/ },
/* 169 */
/***/ function(module, exports, __webpack_require__) {

	var map = {
		"./default/default.vue": 156,
		"./minimal/minimal.vue": 157
	};
	function webpackContext(req) {
		return __webpack_require__(webpackContextResolve(req));
	};
	function webpackContextResolve(req) {
		return map[req] || (function() { throw new Error("Cannot find module '" + req + "'.") }());
	};
	webpackContext.keys = function webpackContextKeys() {
		return Object.keys(map);
	};
	webpackContext.resolve = webpackContextResolve;
	module.exports = webpackContext;
	webpackContext.id = 169;


/***/ },
/* 170 */
/***/ function(module, exports, __webpack_require__) {

	var map = {
		"./account/show/show.vue": 158,
		"./login/index/index.vue": 159,
		"./post/create/create.vue": 160,
		"./post/index/index.vue": 161,
		"./register/index/index.vue": 162
	};
	function webpackContext(req) {
		return __webpack_require__(webpackContextResolve(req));
	};
	function webpackContextResolve(req) {
		return map[req] || (function() { throw new Error("Cannot find module '" + req + "'.") }());
	};
	webpackContext.keys = function webpackContextKeys() {
		return Object.keys(map);
	};
	webpackContext.resolve = webpackContextResolve;
	module.exports = webpackContext;
	webpackContext.id = 170;


/***/ }
]);
//# sourceMappingURL=app.4bce6dbec3093a0d3b8e.js.map