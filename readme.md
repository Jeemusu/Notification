# Laravel Notifications

A Laravel package inspired by [Laracasts/Flash](https://github.com/laracasts/flash) that allows you to create notifications that remain available for a single request.

## Installation

Pull the repository into your project via composer. 


Include the service provider and alias within `config/app.php`.

```php
'providers' => [
    ...
    Jeemusu\Notification\NotificationServiceProvider::class,
];
```


```php
'aliases' => [
    ...
    'Notification' => Jeemusu\Notification\NotificationFacade::class,
];
```

## Usage

The message method allows you to pass a message for the first parameter and a notificaiton type for the second parameter.
```php
public function postLogin()
{
    Notification::message('Login Failed!', 'warning');

    return redirect()->route('login');
}
```

There are some methods that allow easy access the data in the view.

```php
    @if(Notification::getMessage() )
        <div class="{{ Notification::getType() }}">
            {{ Notification::getMessage() }}
        </div>
    @endif
``` 

There are also three other methods available to allow you to set some standard message types.

- `Notification::warning('Message')`
- `Notification::info('Message')`
- `Notification::success('Message')`
