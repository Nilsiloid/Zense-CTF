input_str = "▲▲▲▼▼▲▲ ▲▲▼▼▼▼▲ ▲▲▼▲▲▼▲ ▲▲▼▲▲▲▲ ▲▲▲▼▼▲▲ ▲▲▼▲▼▼▼ ▲▲▲▲▼▼▲ ▲▲▼▲▲▲▼ ▲▼▼▼▼▼ ▲▲▼▼▲▼▼ ▲▲▼▼▼▼▲ ▲▲▲▼▲▼▼ ▲▲▼▼▼▼▲"

binary_str = ""
for symbol in input_str:
    if symbol == "▲":
        binary_str += "1"
    elif symbol == "▼":
        binary_str += "0"
    else:
        binary_str+=" "

print(binary_str)
