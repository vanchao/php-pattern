In the Observer pattern a subject object will notify an observer object if the subject's state changes.<br>

In this example, the PatternSubject is the subject, and the PatternObserver is the observer. For the observer to be notified of changes in the subject it must first be registered with the subject using the attach method. For the observer to no longer be notified of changes in the subject it must be unregistered with the detatch method.<br>

When the subject changes it calls the observer's update method with itself. The observer can then take the subject and use whatever methods have been made available for it to determine the subjects current state.<br>

The Observer Pattern is often called Publish-Subscribe, where the subject would be the publisher, and the observer would be the subscriber.<br>
