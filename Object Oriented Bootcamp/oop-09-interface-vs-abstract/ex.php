<?php
// Think of an abstract class as one that cannot be instantiated on its own
abstract class Provider {
	/* 
		While Interface only allows public methods, abstract allows protected ones as well
		No logic will be stored in an interface
		Abstract classes can enforce contracts (like interface), but resorts to inheritance (which may not be the best idea)
	*/
	abstract protected function getAuthorizationUrl();
}

// Thus to instantiate, we need to create a sub class and leverage inheritance
class FacebookProvider extends Provider {
	protected function getAuthorizationUrl() {
	}
}