# Solution

From the extension and the description of the challenge, we can infer that we're working with .pth files. A cursory Google search leads us to this page, wherein we are lead to routines that load the model in.

On loading and printing the model,  we can see that the names of the model layers spell out the flag. Simply stiching them together leads to the flag.
<br />

```
import torch
model = torch.load("MySpecialModel.pth")
model.eval()
print(model)
```
<br />

Results in the following output : 
```
MySpecialModel(
  (so_you_think): Linear(in_features=100, out_features=10, bias=True)
  (u_can_print): Linear(in_features=10, out_features=3, bias=True)
  (model_names_f517ak): Linear(in_features=3, out_features=1, bias=True)
)
```
<br />

We can add the layer names to form the flag!!

```
Flag : ZENSE{so_you_thinku_can_printmodel_names_f517ak}
```