In the Strategy Pattern a context will choose the appropriate concrete extension of a class interface.<br>

In this example, the StrategyContext class will set a strategy of StrategyCaps, StrategyExclaim, or StrategyStars depending on a paramter StrategyContext receives at instantiation. When the showName() method is called in StrategyContext it will call the showName() method in the Strategy that it set.<br>
